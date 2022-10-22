<?php $page='payment'; include("header.inc") ?>
<script src="scripts/payment.js"></script>

<img src="images/pexels-te-lensfix-1371360.jpg" alt="Cover Image" id="cover_img">
        
<section id="page_content">
    <h1>Payment</h1>

    <section>
        <h3>Your Details</h3><br>
        <aside class="confirm_table_bold">
            <ul class="confirm_table_list">
                <li>Name: </li>
                <li>Phone: </li>
                <li>Email: </li>
                <li>Address: </li>
                <li>Feedback: </li>
            </ul>
        </aside>
        <div class="confirm_table_details">
            <ul class="confirm_table_list">
                <li><span id="confirm_name"></span></li>
                <li><span id="confirm_phone"></span></li>
                <li><span id="confirm_email"></span></li>
                <li><span id="confirm_adr"></span></li>
                <li><span id="confirm_feed"></span></li>
            </ul>
        </div>
    </section>

    <section>
        <h3>Your Cart</h3>
        <aside id="flight_destination_list">
            <ul id="confirm_add_place">
                <li><strong>Destination</strong></li>
            </ul>
        </aside>

        <aside id="flight_seats_list">
            <ul id="confirm_add_seats">
                <li><strong>Total Tickets</strong></li>
            </ul>
        </aside>

        <aside id="flight_cost_list">
            <ul id="confirm_add_costs">
                <li><strong>Total Cost</strong></li>
            </ul>
        </aside>
        
        <div id="price_total">
            <strong>Total:  </strong><span id="total_cost"></span>
        </div>
    </section>

    <section>
        <h3>Make your Payment!</h3>
        <form action="process_order.php" method="post" id="financial_form">
            <fieldset>
                <legend>Financial Details</legend>
                <p>
                    <label for="card_name">Name on Card </label>
                    <input type="text" name="card_name" id="card_name"">
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

                <!--hidden feilds-->
                <input type="hidden" name="firstname" id="firstname">
                <input type="hidden" name="lastname" id="lastname">
                <input type="hidden" name="phone" id="phone">
                <input type="hidden" name="email" id="email">
                <input type="hidden" name="communication_method" id="communication_method">
                <input type="hidden" name="address_street" id="address_street">
                <input type="hidden" name="address_suburb" id="address_suburb">
                <input type="hidden" name="address_pin" id="address_pin">
                <input type="hidden" name="address_state" id="address_state">
                <input type="hidden" name="feedback" id="feedback">
                <input type="hidden" name="destinations" id="destinations">
                <input type="hidden" name="seats_respective_seq" id="seats">
            </fieldset>

            <input type="submit" value="Checkout!" class="form_button"/>;
            <button class="form_button" type="reset" id="cancel_button">Cancel</button>;
        </form>
    </section>

    <button id="scroll_up">↑</button>
</section>

<?php include("footer.inc") ?>