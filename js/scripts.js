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
