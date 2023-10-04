function addToCart(button) {
    var card = button.closest(".card");
    var quantitySelect = card.querySelector(".quantities");
    var selectedQuantity = quantitySelect.value;

    if (selectedQuantity !== "") {
        var cartCounter = document.getElementById("cart-counter");
        var currentCount = parseInt(cartCounter.innerText);
        var newCount = currentCount + 1;

        cartCounter.innerText = newCount;

        var productName = card.querySelector(".items").textContent;
        var productPrice = card.querySelector(".prices").textContent;
        var newItem = document.createElement("li");

        var itemContent = document.createElement("div");
        itemContent.className = "d-flex justify-content-between align-items-center";
        itemContent.style.padding = "15px";

        var itemName = document.createElement("span");
        itemName.className = "item-cart";
        itemName.textContent = productName;

        var itemPrice = document.createElement("span");
        itemPrice.className = "price-cart";
        itemPrice.textContent = productPrice;

        var itemQuantity = document.createElement("span");
        itemQuantity.className = "quantity-cart";
        itemQuantity.textContent = selectedQuantity + " Pcs";

        var deleteButton = document.createElement("button");
        deleteButton.className = "btn btn-danger btn-sm";
        deleteButton.textContent = "Delete";
        deleteButton.onclick = function() {
            deleteCartItem(newItem);
        };

        itemContent.appendChild(itemName);
        itemContent.appendChild(itemPrice);
        itemContent.appendChild(itemQuantity);
        itemContent.appendChild(deleteButton);

        newItem.appendChild(itemContent);

        var cartItems = document.getElementById("cartItems");

        var divider = cartItems.querySelector(".dropdown-divider");

        cartItems.insertBefore(newItem, divider);

        quantitySelect.selectedIndex = 0;
    }
}



function deleteCartItem(newItem) {
    var cartItems = document.getElementById("cartItems");

    cartItems.removeChild(newItem);
    
    var cartCounter = document.getElementById("cart-counter");
    var currentCount = parseInt(cartCounter.innerText);
    var newCount = currentCount - 1;
    cartCounter.innerText = newCount;
}



// quantity
function handleQuantityChange(btnType, inputField) {
    const inputElement = inputField.closest('.card').querySelector('.input-number');
    let currentValue = parseInt(inputElement.value);

    if (btnType === 'plus') {
        currentValue++;
    } else if (btnType === 'minus' && currentValue > 1) {
        currentValue--;
    }

    inputElement.value = currentValue;
}

// Attach event listeners to the "+" and "-" buttons
document.addEventListener('DOMContentLoaded', function () {
    const plusButtons = document.querySelectorAll('.btn-number[data-type="plus"]');
    const minusButtons = document.querySelectorAll('.btn-number[data-type="minus"]');

    plusButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            handleQuantityChange('plus', button);
        });
    });

    minusButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            handleQuantityChange('minus', button);
        });
    });
});


// Define the user names and their corresponding IDs
var users = [
    { name: "Pongsathorn", id: 10400 },
    { name: "Somsak", id: 10401 },
    { name: "Nonglak", id: 10402 },
    { name: "Supaporn", id: 10403 },
    { name: "Siriwan", id: 10404 },
    { name: "Somchai", id: 10405 },
    { name: "Preecha", id: 10406 },
    { name: "Kamala", id: 10407 },
    { name: "Anong", id: 10408 },
    { name: "Sirirat", id: 10409 },
    { name: "Natthaporn", id: 10410 }
];

function generateRandomNameAndId() {
    var randomIndex = Math.floor(Math.random() * users.length);
    return users[randomIndex];
}

var randomUser = generateRandomNameAndId();

localStorage.setItem("userName", randomUser.name);
localStorage.setItem("userId", randomUser.id);

document.addEventListener("DOMContentLoaded", function() {
    var userNameElement = document.getElementById("userName");
    var userIdElement = document.getElementById("userId");

    userNameElement.textContent = randomUser.name;
    userIdElement.textContent = "User ID: " + randomUser.id;
});



function checkBill() {

    // Get current date
    const today = new Date();
    const yyyy = today.getFullYear();
    let mm = today.getMonth() + 1;
    let dd = today.getDate();

    if (dd < 10) dd = '0' + dd;
    if (mm < 10) mm = '0' + mm;

    const formattedToday = yyyy + '/' + mm + '/' + dd;

    // Get user name from the profile dropdown
    var userID = document.getElementById("userId").textContent;
    userID = userID.replace("User ID: ", "");

    // Get the cart items
    var cartItems = document.getElementById("cartItems").getElementsByTagName("li");

    // Initialize arrays to store item data
    var items = [];
    var pcs = [];
    var prices = [];

    // Loop through each cart item and extract relevant information
    for (var i = 0; i < cartItems.length-2; i++) {
        var item = cartItems[i];
        var itemName = item.querySelector(".item-cart").textContent;
        var itemQuantity = item.querySelector(".quantity-cart").textContent;
        var itemPrice = item.querySelector(".price-cart").textContent;

        // Extract the quantity (remove " Pcs" from the end)
        var quantity = itemQuantity.replace(" Pcs", "");

        // Add item data to the respective arrays
        items.push(itemName);
        pcs.push(quantity);
        prices.push(itemPrice);
    }

    // Prepare the data to be sent as a JSON string
    var postData = {
        userID: userID,
        orderDate: formattedToday,
        items: items,
        pcs: pcs,
        prices: prices,
    };

    console.log(postData);

    fetch('insertData.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(postData),
    })
    .then(response => {
        if (response.ok) {
            // The POST request was successful
            console.log("Data sent successfully");
        } else {
            // There was an error with the POST request
            console.error("Error sending data");
        }
    })
    .catch(error => {
        // Handle any network errors
        console.error("Network error:", error);
    });


}
