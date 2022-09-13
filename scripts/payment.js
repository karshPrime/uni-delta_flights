/**
    * Author: Utkarsh KR
    * Target: enquire.html
    * Purpose: save, restore and validate entered data
**/
"use strict";

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

function cancel_booking() {
    alert("hmm")
    window.location = "index.html";
}

function init() {
    get_data();

    document.getElementById("confirm_data").onsubmit = validate;
    document.getElementById("cancel_button").onclick = cancel_booking;
}

window.onload = init;
