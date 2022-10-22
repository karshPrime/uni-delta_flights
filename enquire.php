<?php $page='enquire'; include("header.inc") ?>
<script src="./scripts/enquire.js"></script>

<img src="images/pexels-humphrey-muleba-1647116.jpg" alt="Cover Image" id="cover_img">
        
<section id="page_content">
    <h1>How can we be of your serivce today?</h1>
    <form id="enquire_form" action="payment.php">
        <fieldset>
            <legend>About you</legend>
            <p>
                <label for="fname">First Name: </label>
                <input type="text" name="fname" id="fname" placeholder="Joe">
            </p>
            <p>
                <label for="lname">Last Name: </label>
                <input type="text" name="lname" id="lname" placeholder="Smith">
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="joesmith@deltaflights.com">
            </p>
            <p>
                <label for="phone">Phone No.</label>
                <input type="text" id="phone" name="phone" placeholder="+61 4xxx xxx xxx">
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
                <input type="text" id="adr_st" name="adr_st" placeholder="20 Flinder St.">
            </p>
            <p>
                <label for="adr_sub">Suburb/Town:</label>
                <input type="text" name="adr_sub" id="adr_sub" placeholder="Melbourne">
            </p>
            <p>
                <label for="adr_state">State:</label>
                <select name="adr_state" id="adr_state">
                    <option value="none">(select)</option>
                    <option value="state_VIC">Victoria</option>
                    <option value="state_NSW">New South Wales</option>
                    <option value="state_QLD">Queensland</option>
                    <option value="state_NT">Northern Territory</option>
                    <option value="state_WA">Western Australia</option>
                    <option value="state_SA">South Australia</option>
                    <option value="state_TAS">Tasmania</option>
                    <option value="state_ACT">Capital Territory</option>
                </select>
            </p>
            <p>
                <label for="adr_postcode">Postcode:</label>
                <input type="text" id="adr_postcode" placeholder="1234">
            </p>
        </fieldset>
        
        <fieldset>
            <legend>Get Tickets</legend>
            <label for="seats" class="form_option">seats</label>
            <input type="text" name="seats" id="seats">
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
                        <li> <input type="radio" name="flight_to" id="flight_syd"> </li>
                        <li> <input type="radio" name="flight_to" id="flight_per"> </li>
                        <li> <input type="radio" name="flight_to" id="flight_bri"> </li>
                        <li> <input type="radio" name="flight_to" id="flight_auk"> </li>
                        <li> <input type="radio" name="flight_to" id="flight_suv"> </li>
                        <li> <input type="radio" name="flight_to" id="flight_hob"> </li>
                        <li> <input type="radio" name="flight_to" id="flight_sin"> </li>
                    </ul>
                </aside>
            </div>
        </fieldset>

        <fieldset>
            <legend>Feedback</legend>
            <p>Tell us about your experience!</p>
            <textarea name="message" id="issue_description" rows="7" placeholder="Write description of your problem here..."></textarea>
        </fieldset>
        <input type="submit" value="Pay now!" class="form_button"/>
        <input class="form_button" type="reset" value="Clear">
    </form>
</section>

<?php include("footer.inc") ?>
