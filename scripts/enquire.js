/**
    * Author: Utkarsh KR
    * Target: enquire.html
    * Purpose: save, restore and validate entered data
**/
"use strict";

/* ]====================[ validate entered data ]====================[ */
function validate() {
    var validated = true;
    var error_msg = "";

    // confirm state-pin combination
    var adr_sta = document.getElementById("adr_state").value;
    var adr_pin = document.getElementById("adr_postcode").value;
    var pincode;
    var state;

    var pin_digit1 = Math.floor(adr_pin / 1000);
    
    switch (adr_sta) {
        case "none":
            validated = false;
            error_msg = "Select a state";
            break;

        case "state_VIC":
            if ([3, 8].includes(pin_digit1)) {
                pincode = adr_pin;
                state = "Victoria";
            } else {
                error_msg = "Invalid Pincode for the selected state!";
                validated = false;
            }
            break;

        case "state_NSW":
            if ([1, 2].includes(pin_digit1)) {
                pincode = adr_pin;
                state = "New South Wales";
            } else {
                error_msg = "Invalid Pincode for the selected state!";
                validated = false;
            }
            break;

        case "state_QLD":
            if ([4, 9].includes(pin_digit1)) {
                pincode = adr_pin;
                state = "Queensland";
            } else {
                error_msg = "Invalid Pincode for the selected state!";
                validated = false;
            }
            break;

        case "state_NT":
            if (pin_digit1 == 0) {
                pincode = adr_pin;
                state = "Northern Territory";
            } else {
                error_msg = "Invalid Pincode for the selected state!";
                validated = false;
            }
            break;

        case "state_WA":
            if (pin_digit1 == 6) {
                pincode = adr_pin;
                state = "Western Australia";
            } else {
                error_msg = "Invalid Pincode for the selected state!";
                validated = false;
            }
            break;

        case "state_SA":
            if (pin_digit1 == 5) {
                pincode = adr_pin;
                state = "South Australia";
            } else {
                error_msg = "Invalid Pincode for the selected state!";
                validated = false;
            }
            break;

        case "state_TAS":
            if (pin_digit1 == 7) {
                pincode = adr_pin;
                state = "Tasmania";
            } else {
                error_msg = "Invalid Pincode for the selected state!";
                validated = false;
            }
            break;

        case "state_ACT":
            if (pin_digit1 == 0) {
                pincode = adr_pin;
                state = "Capital Territory";
            } else {
                error_msg = "Invalid Pincode for the selected state!";
                validated = false;
            }
            break;
    }

    // actions depending on if the entered data is correct
    if (validated) {
        save_data(state, pincode);
    } else {
        alert(error_msg);
    }
    
    return validated; // return true only when all entered data is correct
}

/* ]=====================[ save entered data ]=======================[ */
function save_data(state, pin) {
    sessionStorage.fname = document.getElementById("fname").value;
    sessionStorage.lname = document.getElementById("lname").value;
    sessionStorage.email = document.getElementById("email").value;
    sessionStorage.phone = document.getElementById("phone").value;
    
    sessionStorage.adr_str = document.getElementById("adr_st").value;
    sessionStorage.adr_sub = document.getElementById("adr_sub").value;
    sessionStorage.adr_sta = state;
    sessionStorage.adr_pin = pin;

    let comments = document.getElementById("issue_description").value;
    // save comment if something's there, otherwise save N/A
    if (comments.length > 0) {
        sessionStorage.comments = comments;
    } else {
        sessionStorage.comments = "N/A";
    }

    sessionStorage.method = get_in_touch; // get in touch method
}

/* ]=========[ check for prefered method of communication ]==========[ */
function get_in_touch() {
    let method = "";
    if (document.getElementById("main_contact_phone").checked) {
        method = "Phone";
    } else if (document.getElementById("main_contact_post").checked) {
        method = "Post";
    } else {
        method = "Email"; // default option
    }
    
    return method;
}

/* ]=============[ prefil saved data for next visit ]================[ */
function prefill_form() {
    //
}


/* ]=====================[ initialize the file ]=====================[ */
function init() {
    var enquire_form = document.getElementById("enquire_form");
    enquire_form.onsubmit = validate;

    prefill_form;
}

window.onload = init;