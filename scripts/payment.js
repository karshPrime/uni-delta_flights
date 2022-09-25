/**
    * Author: Utkarsh KR
    * Target: enquire.html
    * Purpose: save, restore and validate entered data
**/
"use strict";

function validate() {
    let validated = true;
    let error_msg = "";

    // check for if name on card is different
    let card_name = document.getElementById("card_name").value;
    if (card_name == undefined || card_name.length < 1) {
        document.getElementById("card_name").value = sessionStorage.fname + ' ' + sessionStorage.lname;
    } else if (card_name.length > 40) {
        error_msg += "Name should be smaller than 40characters.\n";
        validated = false;
    } else if (!(/^[a-zA-Z ]+$/.test(card_name))) {
        error_msg += "name can only have letters and spaces.\n"
        validated = false;
    }
    
    // cross check entered card number with card type
    let card_number = document.getElementById("card_number").value;
    let required_digit;
    if (card_number == undefined || card_number == 0 || isNaN(card_number)) {
        error_msg += "INVALID CARD NUMBER\n";
        validated = false;

    } else if (document.getElementById("mastercard").checked) {
        required_digit = Math.floor(card_number/Math.pow(10, 15));
        if ((card_number.length == 16) && (required_digit == 4)) {
            sessionStorage.card_type = "Mastercard";
        } else {
            error_msg += "INVALID CARD NUMBER\n";
            validated = false;
        }
    
    } else if (document.getElementById("visa").checked) {
        required_digit = Math.floor(card_number/Math.pow(10, 14));
        if ((card_number.length == 16) && (required_digit >= 51) && (required_digit <= 55)) {
            sessionStorage.card_type = "Visa";
        } else {
            error_msg += "INVALID CARD NUMBER\n";
            validated = false;
        }

    } else if (document.getElementById("american_exp").checked) {
        required_digit = Math.floor(card_number/Math.pow(10, 13));
        if ((card_number.length == 15) && (required_digit == 34 || required_digit == 37)) {
            sessionStorage.card_type = "American Express";
        } else {
            error_msg += "INVALID CARD NUMBER\n";
            validated = false;
        }

    } else {
        validated = false;
        error_msg += "Select your card type.\n";
    }

    // cvv check
    let cvv = document.getElementById("cvv").value;
    if (cvv < 99 || cvv > 1000 || cvv == undefined || isNaN(cvv)) {
        error_msg += "invalid cvv.\n";
        validated = false;
    }

    // date format
    let exp_date = document.getElementById("exp_date").value.split('-');
    if (exp_date[0] > 12 || exp_date[0] < 0 || exp_date[1] < 22) {
        error_msg += "Invalid Card expire date.\n";
        validated = false;
    } else if (exp_date.length != 2) {
        error_msg += "Please enter card expire details.\n";
        validated = false;
    }

    if (error_msg != "") {
        alert(error_msg);
    }

    return validated;
}


// gets stored data into memory
function get_data(flight_destinations) {
    // getting data
    if (sessionStorage.fname != undefined) {
        let name = sessionStorage.fname + ' ' + sessionStorage.lname;
        let address = sessionStorage.adr_str + ', ' + sessionStorage.adr_sub + '. ' + 
            sessionStorage.adr_sta + '-' + sessionStorage.adr_pin;

        document.getElementById("confirm_name").textContent = name;
        document.getElementById("confirm_phone").textContent = sessionStorage.phone;
        document.getElementById("confirm_email").textContent = sessionStorage.email;
        document.getElementById("confirm_adr").textContent = address;
        document.getElementById("confirm_feed").textContent = sessionStorage.comments;
    
        document.getElementById("card_name").placeholder = name;

        document.getElementById("firstname").value = sessionStorage.fname;
        document.getElementById("lastname").value = sessionStorage.lname;
        document.getElementById("phone").value = sessionStorage.phone;
        document.getElementById("email").value = sessionStorage.email;
        document.getElementById("communication_method").value = sessionStorage.commute;
        document.getElementById("address_street").value = sessionStorage.adr_str;
        document.getElementById("address_suburb").value = sessionStorage.adr_sub;
        document.getElementById("address_pin").value = sessionStorage.adr_pin;
        document.getElementById("address_state").value = sessionStorage.adr_sta;
        document.getElementById("feedback").value = sessionStorage.comments;

        // destination and seats
        let booked_places = [];
        let booked_seats = [];
        let seats = sessionStorage.seats.split(',');
        for (var i = 0; i < seats.length; i++) {
            if (i % 2 == 0) {
                booked_places.push(flight_destinations[seats[i]]);
            } else {
                booked_seats.push(seats[i]);
            }
        }

        document.getElementById("destinations").value = booked_places.join("; ");
        document.getElementById("seats").value = booked_seats.join("; ");
    }
}

// displays selected flights in enquire with total cost
function selected_flights(flight_destinations) {
    var seats = sessionStorage.seats.split(',');
    var flight_costs = [ 453.00, 691.00, 428.00, 621.00, 546.00, 356.00, 699.00 ];
    var total_cost = 0;
    let current_cost = 0;
    
    var add_place = document.getElementById("confirm_add_place"); // ul for places 
    var add_seats = document.getElementById("confirm_add_seats"); // ul for seats
    var add_costs = document.getElementById("confirm_add_costs"); // ul for costs

    // writing data on the page
    for (var i = 0; i < (seats.length / 2); i++) {
        current_cost = flight_costs[seats[i*2]] * seats[(i*2)+1];
        total_cost += current_cost;

        add_place.innerHTML += '<li>' + flight_destinations[seats[i*2]] + '</li>';
        add_seats.innerHTML += '<li>' + seats[(i*2)+1] + '</li>';
        add_costs.innerHTML += '<li>A$ ' + current_cost + '.00</li>';
    }

    // outputting calculated total cost for all flights
    document.getElementById("total_cost").textContent = 'A$ ' + total_cost;
}


// cancels booking 
function cancel_booking() {
    window.location = "index.html";
}

function init() {
    var flight_destinations = ["Sydney, NSW, Australia", "Perth, WA, Australia", 
        "Brisbane, QLD, Australia", "Aukland, New Zealand", "Suva, Fiji", 
        "Hobart, Tasmania, Australia", "Singapore City, Singapore" ];
    
    get_data(flight_destinations);
    selected_flights(flight_destinations);

    document.getElementById("financial_form").onsubmit = validate;
    document.getElementById("financial_form").onreset= cancel_booking;
}

window.onload = init;
