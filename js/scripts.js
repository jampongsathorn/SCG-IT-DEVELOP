/*!
* Start Bootstrap - Shop Homepage v5.0.6 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

// JavaScript function to increment the cart counter
// JavaScript function to increment the cart counter
function addToCart() {
    // Get the cart counter element by its id
    var cartCounter = document.getElementById("cart-counter");

    // Get the current cart count as an integer
    var currentCount = parseInt(cartCounter.innerText);

    // Increment the count by 1
    var newCount = currentCount + 1;

    // Update the cart counter with the new count
    cartCounter.innerText = newCount;
}
