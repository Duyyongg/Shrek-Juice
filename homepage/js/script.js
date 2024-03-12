document.addEventListener('DOMContentLoaded', () => {
    displayCart();
});

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if (productNumbers) {
        document.querySelector('.cart span').textContent = productNumbers;
    }
}

function displayCart() {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector('.cart-items');
    let cartCost = localStorage.getItem('totalCost');

    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.name}" />
                    <div>
                        <h5>${item.name}</h5>
                        <h5>$${item.price}</h5>
                        <span>Quantity: ${item.inCart}</span>
                    </div>
                    <div class="remove-item" data-product="${item.tag}">&times;</div>
                </div>
            `;
        });

        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="basketTotalTitle">Total</h4>
                <h4 class="basketTotal">$${cartCost}</h4>
            </div>
        `;

        deleteButtons();
    }
}

function deleteButtons() {
    let deleteButtons = document.querySelectorAll('.remove-item');
    let productNumbers = localStorage.getItem('cartNumbers');
    let cartCost = localStorage.getItem('totalCost');
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    for (let i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('click', () => {
            let productTag = deleteButtons[i].getAttribute('data-product');

            localStorage.setItem('cartNumbers', productNumbers - cartItems[productTag].inCart);
            localStorage.setItem('totalCost', cartCost - (cartItems[productTag].price * cartItems[productTag].inCart));

            delete cartItems[productTag];
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));

            displayCart();
            onLoadCartNumbers();
        });
    }
}

onLoadCartNumbers();
displayCart();


// remove cartItems 
let remove_cart = document.getElementsByClassName("close");
for (let i = 0; i < remove_cart.length; i++) {
  let button = remove_cart[i]
  button.addEventListener("click", function () {
    let button_remove = event.target
    button_remove.parentElement.parentElement.remove()
  })
  
}

//  update cartItems

function updateCart(){
    let cart_item = document.getElementById("#order");
    let cart_row = document.getElementsByClassName("main");
    
}