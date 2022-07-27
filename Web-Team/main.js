let carts = document.querySelectorAll('.add');
let products = [
    {
        name: 'Model 4S',
        Price: 2499.00,
        inCart: 0
    }
]

for (let i = 0; i <= carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers();
    })

}
function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if (productNumbers) {
        document.querySelector('.add-xs').textContent = productNumbers;
    }
}


function cartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.add-xs').textContent = productNumbers + 1;
        window.location.href = "cart.php"
    }
    else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.add-xs').textContent = 1;

    }


}
onLoadCartNumbers()