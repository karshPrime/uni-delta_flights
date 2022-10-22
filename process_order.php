<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once ("settings.php");
        session_start();
        $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

        function sanitise_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            
            return $data;
        }


        $errMsg = ""; // error message identifier


        // redirect to enquire if opened this website directly
        if (!isset($_POST["firstname"]) && !isset($_SESSION["firstname"])) {
            header("location:enquire.php");
            exit();
        };


        // Sanitization ==========================================
        $firstname = sanitise_input($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z]{1,25}+$/", $firstname)) {
            $errMsg .= "<p class='center_allign'>INVALID First name!</p>\n";
        }
        
        $lastname = sanitise_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z]{1,25}+$/", $lastname)) {
            $errMsg .= "<p class='center_allign'>INVALID Last name!</p>\n";
        }
        
        $phone = sanitise_input($_POST["phone"]);	
        if (!preg_match("/[0-9]{10}/", $phone)) {
            $errMsg .= "<p class='center_allign'>INVALID phone number!.</p>\n";
        }
        
        $email = sanitise_input($_POST["email"]);	
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errMsg = "<p class='center_allign'>INVALID email!</p>\n";
        }

        // COMMUNICATION TYPE
        // feedback

        $address_street = sanitise_input($_POST["address_street"]);
        if (!preg_match("/^[a-zA-Z0-9 ,.'-]{1,40}$/", $address_street)) {
            $errMsg .= "<p class='center_allign'>INVALID street!</p>\n";
        }
        
        $address_suburb = sanitise_input($_POST["address_suburb"]);	
        if (!preg_match("/^[a-zA-Z]{1,20}+$/", $address_suburb)) {
            $errMsg .= "<p class='center_allign'>INVALID suburb!</p>\n";
        }
        
        
        $address_state = sanitise_input($_POST["address_state"]); 
        if ($address_state == "none") {
            // checking if some address_state indeed has been selected
            $errMsg .= "<p class='center_allign'>Please select your state.</p>\n";
        }
         
        $address_pin = $_POST["address_pin"];
        if (!preg_match("/[0-9]{4,4}/", $address_pin)) {
            $errMsg .= "<p class='center_allign'> $address_pin.</p>\n";
        } else {
            switch ($address_state) {
            case "VIC":
                if ($address_pin[0] != "3" && $address_pin[0] != "8") {
                    $errMsg .= "<p class='center_allign'>INVALID pin code!</p>\n";
                }
                break;
            
            case "QLD":
            if ($address_pin[0] != "4" && $address_pin[0] != "9") {
                $errMsg .= "<p class='center_allign'>INVALID pin code!</p>\n";
            }
            break;

            case "SA":
            if ($address_pin[0] != "5") {
                $errMsg .= "<p class='center_allign'>INVALID pin code!</p>\n";
            }
            break;

            case "TAS":
            if ($address_pin[0] != "7") {
                $errMsg .= "<p class='center_allign'>INVALID pin code!</p>\n";
            }
            break;

            case "WA":
            if ($address_pin[0] != "6") {
                $errMsg .= "<p class='center_allign'>INVALID pin code!</p>\n";
            }
            break;
            
            case "NT":
            if ($address_pin[0] != "0") {
                $errMsg .= "<p class='center_allign'>INVALID pin code!</p>\n";
            }
            break;
            
            case "ACT":
            if ($address_pin[0] != "0") {
                $errMsg .= "<p class='center_allign'>INVALID pin code!</p>\n";
            }
            break;
         
            case "NSW":
            if ($address_pin[0] != "1" && $address_pin[0] != "2") {
                $errMsg .= "<p class='center_allign'>INVALID pin code!</p>\n";
            }
            break;
            }
        }
         
        $seats_respective_seq = sanitise_input($_POST["seats_respective_seq"]);
        if ($seats_respective_seq == "") {
            $errMsg .= "<p class='center_allign'>Please select some seats</p>\n";
        }
              
        $destinations = sanitise_input($_POST["destinations"]);
        if ( $destinations == "" ) {
            $errMsg .= "<p class='center_allign'>Please select a destinations.</p>\n";
        }
        
        $cost = sanitise_input($_POST["cost"]);
        $totalPrice = (int)$cost * (int)$seats_respective_seq;
        
        $card = sanitise_input($_POST["card"]);	
        if ($card == "none") {
            $errMsg .= "<p class='center_allign'>Please select your card type.</p>\n";
        }
         
        $card_name = sanitise_input($_POST["card_name"]);	
        if ($card_name == "") {
            $card_name = $firstname + $lastname;
        }
        else if (!preg_match("/^[a-zA-Z ]{1,40}$/", $card_name)) {
            $errMsg .= "<p class='center_allign'>Card name must contains only alphabetical characters!</p>\n";
        }
         
        $card_number = sanitise_input($_POST["card_number"]);
        if ($card_number == "") {
            $errMsg .= "<p class='center_allign'>Please enter your card number.</p>\n";
        } else {
            switch ($card) {
            case "Visa":
            if (($card_number[0] != "4") || (!preg_match("/^\d{16}$/", $card_number))) {
               $errMsg .= "<p class='center_allign'>INVALID card number!</p>\n";
            }
            break;

            case "Mastercard":
            if ((!($card_number[0] == "5" && ($card_number[1] >= 1 && $card_number[1] <= 5))) || (!preg_match("/^\d{16}$/", $card_number))) {
               $errMsg .= "<p class='center_allign'>INVALID card number!</p>\n";
            }
            break;

            case "American Express":
            if ((!($card_number[0] == "3" && ($card_number[1] == "4" || $card_number[1] == "7"))) || (!preg_match("/^\d{15}$/", $card_number))) {
                $errMsg .= "<p class='center_allign'>INVALID card number!</p>\n";
            }
            break;
            }
        }
           
        $cvv = sanitise_input($_POST["cvv"]);			
        if ($cvv == "") {
            $errMsg .= "<p class='center_allign'>Please enter Card CVV number</p>\n";
        }
        else if (!preg_match("/^\d{3}$/", $cvv)) {
            $errMsg .= "<p class='center_allign'>INVALID CVV!</p>\n";
        }
        
        $exp_date = sanitise_input($_POST["exp_date"]);			
        if (!preg_match("/^\d{2}\-\d{2}$/" , $exp_date)) {
            $errMsg .= "<p class='center_allign'>INVALID Exp Month-Year format!</p>\n";
        }
        
        $_SESSION["firstname"] = $firstname;
        $_SESSION["lastname"] = $lastname;
        $_SESSION["address_street"] = $address_street;
        $_SESSION["address_suburb"] = $address_suburb;
        $_SESSION["address_state"] = $address_state;
        $_SESSION["address_pin"] = $address_pin;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["seats_respective_seq"] = $seats_respective_seq;
        $_SESSION["destinations"] = $destinations;
        $_SESSION["totalPrice"] = $totalPrice;
        $_SESSION["card"] = $card;
        $_SESSION["card_name"] = $card_name;
        $_SESSION["card_number"] = $card_number;
        $_SESSION["exp_date"] = $exp_date;
        $_SESSION["cvv"] = $cvv;
         
        if ($errMsg != "") { 
            $_SESSION["errMsg"] = $errMsg;
            header("location:fix_order.php");
            exit();
        }
         
        if (!$conn) {
            die("Database Connection Failure");
        } 
        
        $orders = "orders";
        if ($result = mysqli_query( $conn , "SHOW TABLES LIKE '".$orders."'")) { 
            if($result->num_rows == 1) {
               echo "table already exists";

            } else {
                // create table
                $queryCreate = "CREATE TABLE `orders` (
                    `order_id` int(11) AUTO_INCREMENT PRIMARY KEY,
                    `first_name` text NOT NULL,
                    `last_name` text NOT NULL,
                    `phone` int(10) NOT NULL,
                    `email` varchar(40) NOT NULL,
                    `address_street` varchar(40) NOT NULL,
                    `address_suburb` varchar(20) NOT NULL,
                    `address_state` text NOT NULL,
                    `address_pin` int(4) NOT NULL,
                    `destinations` text NOT NULL,
                    `seats_respective_seq` text NOT NULL,
                    `total_price` float NOT NULL,
                    `card` enum('American Express','Mastercard','Visa') NOT NULL DEFAULT,
                    `card_name` text NOT NULL,
                    `card_number` int(16) NOT NULL,
                    `exp_date` varchar(5) NOT NULL,
                    `cvv` int(3) NOT NULL,
                    `order_status` enum('PENDING','FULFILLED','PAID','ARCHIVED') NOT NULL DEFAULT 'PENDING',
                    `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
                $result = mysqli_query($conn, $queryCreate);
            }
        } 
        
        $query = "INSERT INTO $orders (`first_name`,`last_name`,`address_street`,`address_suburb`,`address_state`,
            `address_pin`,`phone`,`email`,`destinations`,`seats_respective_seq`,`total_price`,`card`,`card_name`,
            `card_number`,`exp_date`,`cvv`) VALUES ('$firstname','$lastname','$address_street','$address_suburb',
            '$address_state','$address_pin','$phone','$email','$destinations','$seats_respective_seq','$total_price',
            '$card','$card_name','$card_number','$exp_date','$cvv' );";  
         
           
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "<p>Internal error. Issue:", $query, "</p>";
        } else {
            echo "<p>Success</p>";

            $last_id = $conn->insert_id;
            $_SESSION["order_id"] = $last_id;
            $last_query = "SELECT * FROM $orders WHERE order_id = $last_id";
            $last_result = mysqli_query($conn, $last_query);
            $seq = mysqli_fetch_array($last_result, MYSQLI_ASSOC);
            $_SESSION["order_time"] = $seq["order_time"];
        }
        mysqli_close($conn);
        
        header("location:receipt.php");
        exit();
    ?>
</body>
</html>
