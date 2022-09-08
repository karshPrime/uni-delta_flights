/**
 * Author: Utkarsh KR
 * Target: enquire.html 
 * Purpose: Backend to the project
**/

"use strict";


/* ]=============================[ Validate Data ]=============================[ */
function validate() {
    //
}


/* ]=====================[ Store Selected Flight Details ]=====================[ */
function are_selected(index) {
    var costs = [499.00, 549.00, 499.00, 150.00, 449.99, 230.00, 180.50, 399.99,
        499.99, 949.99, 750.00, 1499.00]
    
    var destinations = ["Berlin [TODAY]", "Hawaii [TODAY]", "Paris [TODAY]", 
    "Sydney", "Wellington", "Perth", "Brisbane", "Aukland", "New Delhi", 
    "Shanghai", "Merauke", "Cape Town"];

    // store values in memory
}

function indie_flights() {
    document.getElementById("home_berlin").onclick = are_selected(1);
    document.getElementById("home_hawaii").onclick = are_selected(2);
    document.getElementById("home_paris").onclick = are_selected(3);
    document.getElementById("browse_sydney").onclick = are_selected(4);
    document.getElementById("browse_wellington").onclick = are_selected(5);
    document.getElementById("browse_perth").onclick = are_selected(6);
    document.getElementById("browse_brisbane").onclick = are_selected(7);
    document.getElementById("browse_aukland").onclick = are_selected(8);
    document.getElementById("browse_delhi").onclick = are_selected(9);
    document.getElementById("browse_shanghai").onclick = are_selected(10);
    document.getElementById("browse_merauke").onclick = are_selected(11);
    document.getElementById("browse_capetown").onclick = are_selected(12);
}


/* ]====================[ Display Selected Flight Details ]====================[ */



/* ]=============================[ Save Form Data ]============================[ */
function get_data() {
    //
}

function cancel_booking() {
    //
}

function calculate_cost() {
    //
}

function init() {
    indie_flights();
    get_data();
}

window.onload = init;
