


// Enchancement 1
// Preloading text in the payment form with generated data.
/* 
the code for this is present in payment.js (and not here) to increase
code cohesion and reuse same set of data again and again, isntead of
redefining it.

the respective code have been clearly highlighted (with comments) as 
enhancement code.
*/



// Enhancement 2
// Generating content from inside JavaScript
/*
again the code for this enhancement is in payment.js; again due to 
code cohesion reasons. ideally, this way I had to define certain data
only one time.
*/


// Enhancement 3
function scroll_up() {
    window.scrollTo(0, 0);
}


function init() {
    document.getElementById("scroll_up").onclick = scroll_up;
}

window.onload = init;
