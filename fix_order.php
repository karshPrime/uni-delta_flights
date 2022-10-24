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
    <?php $page='fix_order'; include("header.inc");
        session_start();
        print_r($_SESSION["errMsg"]);

        if (!isset($_POST["firstname"]) && !isset($_SESSION["firstname"])){
            header("location:enquire.php");
            exit();
        }

        // getting values back
        if (isset($_SESSION["firstname"])){
            $firstname = $_SESSION["firstname"];
        } else { 
            $firstname = "";
        }
        if (isset($_SESSION["lastname"])){
            $lastname = $_SESSION["lastname"];
        } else { 
            $lastname = "";
        }
        if (isset($_SESSION["email"])){
            $email = $_SESSION["email"];
        } else { 
            $email = "";
        }
        if (isset($_SESSION["phone"])){
            $phone = $_SESSION["phone"];
        } else { 
            $phone = "";
        }
        if (isset($_SESSION["address_street"])){
            $address_street = $_SESSION["address_street"];
        } else { 
            $address_street = "";
        }
        if (isset($_SESSION["address_suburb"])){
            $address_suburb = $_SESSION["address_suburb"];
        } else { 
            $address_suburb = "";
        }
        if (isset($_SESSION["address_pin"])){
            $address_pin = $_SESSION["address_pin"];
        } else { 
            $address_pin = "";
        }
        if (isset($_SESSION["seats"])){
            $seats = $_SESSION["seats"];
        } else { 
            $seats = "";
        }
        if (isset($_SESSION["feedback"])){
            $feedback = $_SESSION["feedback"];
        } else { 
            $feedback = "";
        }
        if (isset($_SESSION["state"])){
            $state = $_SESSION["state"];
        } else { 
            $state = "";
        }
        if (isset($_SESSION["destination"])){
            $destination = $_SESSION["destination"];
        } else { 
            $destination = "";
        }

    ?>

    <script src="./scripts/payment.js"></script>

    <section id="page_content">
    <!-- form to re-enter data -->
    <form id="enquire_form" method="POST" action="process_order.php" novalidate="novalidate">
        <h2>Please enter your correct details</h2>
        <fieldset>
            <legend>About you</legend>
            <p>
                <label for="fname">First Name: </label>
                <input type="text" name="fname" id="fname" placeholder="Joe" value="<?php echo $firstname; ?>">
            </p>
            <p>
                <label for="lname">Last Name: </label>
                <input type="text" name="lname" id="lname" placeholder="Smith" value="<?php echo $lastname; ?>">
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="joesmith@deltaflights.com" value="<?php echo $email; ?>">
            </p>
            <p>
                <label for="phone">Phone No.</label>
                <input type="text" id="phone" name="phone" placeholder="+61 4xxx xxx xxx" value="<?php echo $phone; ?>">
            </p>
            <br>
            <p>
                How would you like to get in touch?
            </p>

            <!--default option-->
            <input type="radio" name="main_contact" id="main_contact_email" checked>
            <label for="main_contact_email" class="form_option">Email</label>
            <input type="radio" name="main_contact" id="main_contact_phone">
            <label for="main_contact_phone" class="form_option">Phone</label>
            <input type="radio" name="main_contact" id="main_contact_post">
            <label for="main_contact_post" class="form_option">Post</label>
        </fieldset>

        <fieldset>
            <legend>Address</legend>
            <p>
                <label for="adr_st">Street: </label>
                <input type="text" id="adr_st" name="adr_st" placeholder="20 Flinder St." value="<?php echo $address_street; ?>">
            </p>
            <p>
                <label for="adr_sub">Suburb/Town:</label>
                <input type="text" name="adr_sub" id="adr_sub" placeholder="Melbourne" value="<?php echo $address_suburb; ?>">
            </p>
            <p>
                <label for="adr_state">State:</label>
                <select name="adr_state" id="adr_state">
                    <option value="none">(select)</option>
                    <option <?php if ($state == "Victoria") echo 'selected'; ?> value="state_VIC">Victoria</option>
                    <option <?php if ($state == "New South Wales") echo 'selected'; ?> value="state_NSW">New South Wales</option>
                    <option <?php if ($state == "Queensland") echo 'selected'; ?> value="state_QLD">Queensland</option>
                    <option <?php if ($state == "Northern Territory") echo 'selected'; ?> value="state_NT">Northern Territory</option>
                    <option <?php if ($state == "Western Australia") echo 'selected'; ?> value="state_WA">Western Australia</option>
                    <option <?php if ($state == "South Australia") echo 'selected'; ?> value="state_SA">South Australia</option>
                    <option <?php if ($state == "Tasmania") echo 'selected'; ?> value="state_TAS">Tasmania</option>
                    <option <?php if ($state == "Capital Territory") echo 'selected'; ?> value="state_ACT">Capital Territory</option>
                </select>
            </p>
            <p>
                <label for="adr_postcode">Postcode:</label>
                <input type="text" id="adr_postcode" placeholder="1234" value="<?php echo $address_pin; ?>">
            </p>
        </fieldset>

        <fieldset>
            <legend>Get Tickets</legend>
            <label for="seats" class="form_option">seats</label>
            <input type="text" name="seats" id="seats" value="<?php echo $seats; ?>">
            <div>
                <aside id="flight_destination_list">
                    <ul>
                        <li>Sydney, NSW, Australia</li>
                        <li>Perth, WA, Australia</li>
                        <li>Brisbane, QLD, Australia</li>
                        <li>Aukland, New Zealand</li>
                        <li>Suva, Fiji</li>
                        <li>Hobart, Tasmania, Australia</li>
                        <li>Singapore City, Singapore</li>
                    </ul>
                </aside>
                <aside id="flight_cost_list">
                    <ul>
                        <li>A$ 453.00</li>
                        <li>A$ 691.00</li>
                        <li>A$ 428.00</li>
                        <li>A$ 621.00</li>
                        <li>A$ 546.00</li>
                        <li>A$ 356.00</li>
                        <li>A$ 699.00</li>
                    </ul>
                </aside>
                <aside id="flight_seats_list">
                    <ul>
                        <li> <input type="radio" <?php if ($destination == "flight_syd") echo 'selected'; ?> name="flight_to" id="flight_syd"> </li>
                        <li> <input type="radio" <?php if ($destination == "flight_per") echo 'selected'; ?> name="flight_to" id="flight_per"> </li>
                        <li> <input type="radio" <?php if ($destination == "flight_bri") echo 'selected'; ?> name="flight_to" id="flight_bri"> </li>
                        <li> <input type="radio" <?php if ($destination == "flight_auk") echo 'selected'; ?> name="flight_to" id="flight_auk"> </li>
                        <li> <input type="radio" <?php if ($destination == "flight_suv") echo 'selected'; ?> name="flight_to" id="flight_suv"> </li>
                        <li> <input type="radio" <?php if ($destination == "flight_hob") echo 'selected'; ?> name="flight_to" id="flight_hob"> </li>
                        <li> <input type="radio" <?php if ($destination == "flight_sin") echo 'selected'; ?> name="flight_to" id="flight_sin"> </li>
                    </ul>
                </aside>
            </div>
        </fieldset>

        <fieldset>
            <legend>Feedback</legend>
            <p>Tell us about your experience!</p>
            <textarea name="message" id="issue_description" rows="7" placeholder="Write description of your problem here..." value="<?php echo $feedback; ?>"></textarea>
        </fieldset>

        <fieldset>
            <legend>Financial Details</legend>
            <p>
                <label for="card_name">Name on Card </label>
                <input type="text" name="card_name" id="card_name">
            </p>

            <div>
                <p> Select your card type </p>
                <input type="radio" name="card" id="mastercard" value="Mastercard">
                <label for="mastercard" class="form_option">Mastercard</label>

                    <input type="radio" name="card" id="visa" value="Visa">
                    <label for="visa" class="form_option">Visa</label>

                    <input type="radio" name="card" id="american_exp" value="American Express">
                    <label for="american_exp" class="form_option">American Express</label>
            </div>
            <br>

            <p>
                <label for="card_number">Card Number</label>
                <input type="text" name="card_number" id="card_number">
            </p>

            <p>
                <label for="exp_date">Expiry Date </label>
                <input type="text" name="exp_date" id="exp_date" placeholder="mm-yy">
            </p>

            <p>
                <label for="cvv">Card Verification Value</label>
                <input type="text" name="cvv" id="cvv" placeholder="CVV">
            </p>
        </fieldset>

        <input type="submit" value="Checkout!" class="form_button"/>;
        <button class="form_button" type="reset" id="cancel_button">Cancel</button>;
    </form>
    </section>

    <?php include("footer.inc") ?>
</body>
</html>
