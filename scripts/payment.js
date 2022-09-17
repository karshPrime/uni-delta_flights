/**
    * Author: Utkarsh KR
    * Target: enquire.html
    * Purpose: save, restore and validate entered data
**/
"use strict";

function validate() {
    //
    return true;
}


// gets stored data into memory
function get_data() {
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
    }
}

// displays selected flights in enquire with total cost
function selected_flights() {
    var seats = sessionStorage.seats.split(',');
    var flight_costs = [ 453.00, 691.00, 428.00, 621.00, 546.00, 356.00, 699.00 ];
    var flight_destinations = ["Sydney, NSW, Australia", "Perth, WA, Australia", 
        "Brisbane, QLD, Australia", "Aukland, New Zealand", "Suva, Fiji", 
        "Hobart, Tasmania, Australia", "Singapore City, Singapore" ];
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
    alert("hmm")
    window.location = "index.html";
}

function init() {
    get_data();
    selected_flights();
    // document.getElementById("confirm_data").onsubmit = validate;
    // document.getElementById("cancel_button").onclick = cancel_booking;
}

window.onload = init;
