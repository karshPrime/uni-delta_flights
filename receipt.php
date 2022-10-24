<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="utkarsh"/>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 1024px)"/>
    <title>Delta Flights</title>
</head>

<body>
    <?php 
        $page='receipt'; 
        include("header.inc"); 
        session_start(); 
        
        // redirect to enquire if opened this website directly
        if (!isset($_SESSION["firstname"])) {
            header("location:enquire.php");
            exit();
        };
    ?>

    <section id="page_content">
        <h1>Order receipt</h1>
        <table>
            <tbody>
                <tr>
                    <td><strong>firstname</strong></td>
                    <td><?php echo $_SESSION["firstname"]?></td>
                </tr>
                <tr>
                    <td><strong>lastname</strong></td>
                    <td><?php echo $_SESSION["lastname"]?></td>
                </tr>
                <tr>
                    <td><strong>phone</strong></td>
                    <td><?php echo $_SESSION["phone"]?></td>
                </tr>
                <tr>
                    <td><strong>email</strong></td>
                    <td><?php echo $_SESSION["email"]?></td>
                </tr>
                <tr>
                    <td><strong>address_street</strong></td>
                    <td><?php echo $_SESSION["address_street"]?></td>
                </tr>
                <tr>
                    <td><strong>address_suburb</strong></td>
                    <td><?php echo $_SESSION["address_suburb"]?></td>
                </tr>
                <tr>
                    <td><strong>address_pin</strong></td>
                    <td><?php echo $_SESSION["address_pin"]?></td>
                </tr>
                <tr>
                    <td><strong>communication_method</strong></td>
                    <td><?php echo $_SESSION["communication_method"]?></td>
                </tr>
                <tr>
                    <td><strong>seats</strong></td>
                    <td><?php echo $_SESSION["seats"]?></td>
                </tr>
                <tr>
                    <td><strong>destination</strong></td>
                    <td><?php echo $_SESSION["destination"]?></td>
                </tr>
                <tr>
                    <td><strong>total_price</strong></td>
                    <td><?php echo $_SESSION["total_price"]?></td>
                </tr>
                <tr>
                    <td><strong>card</strong></td>
                    <td><?php echo $_SESSION["card"]?></td>
                </tr>
                <tr>
                    <td><strong>card_name</strong></td>
                    <td><?php echo $_SESSION["card_name"]?></td>
                </tr>
                <tr>
                    <td><strong>card_number</strong></td>
                    <td><?php echo $_SESSION["card_number"]?></td>
                </tr>
                <tr>
                    <td><strong>exp_date</strong></td>
                    <td><?php echo $_SESSION["exp_date"]?></td>
                </tr>
                <tr>
                    <td><strong>cvv</strong></td>
                    <td><?php echo $_SESSION["cvv"]?></td>
                </tr>
                <tr>
                    <td><strong>feedback</strong></td>
                    <td><?php echo $_SESSION["feedback"]?></td>
                </tr>
            </tbody>
        </table>
    </section>

    <?php include("footer.inc") ?>

</body>
</html>
