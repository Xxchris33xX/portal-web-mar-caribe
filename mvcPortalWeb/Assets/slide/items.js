const addToShoppingCartBtn = document.querySelectorAll(".boton-producto");
const productContainer = document.querySelector(".product-container");
addToShoppingCartBtn.forEach(addToCardBtn =>{
    addToCardBtn.addEventListener('click',addToCartClicked);
})

const containerProduct = document.querySelector('.product-container');

function addToCartClicked(event){
    const button = event.target;
    
    //CAPTURA EL DIV QUE TIENE LA INFORMACIÓN DEL PRODUCTO
    const product = button.closest('.product');
    //CAPTURA EL TÍTULO DEL PRODUCTO
    const titleProduct = product.querySelector('.product__title').textContent;
    //CAPTURA EL PRECIO DEL PRODUCTO
    const priceProduct = product.querySelector('.producto__price').textContent;
    //CAPTURA LA IMAGEN DEL PRODUCTO
    const imgProduct = product.querySelector('.product__img').src;
    
    addProductToShoppingCart(titleProduct,priceProduct,imgProduct);
}

function addProductToShoppingCart(titleProduct,priceProduct,imgProduct){
    let test= 1;
    const title = containerProduct.getElementsByClassName('title_product');

    for(let i= 0; i < title.length; i++){
        if(title[i].innerText === titleProduct){
            let ElementQuantity = title[i].parentElement.parentElement.querySelector('.productQuantity');
            ElementQuantity.value++;
            updateShoppingCartTotal();
            return;
        }
    }

    const ShoppingCartRow = document.createElement('div');
    const ShoppingCartContent = `
    <div class="productCart">
        <div class="p-img-title">
            <span class="title_product">${titleProduct}</span>
            <img src="${imgProduct}" alt="" class="img-container">
        </div>
        <h5 class="productPrice">${priceProduct}</h5>
        <div class="p-img-title">
            <i class='bx bx-x btnDeleteItem'></i>
            <input type="number" value="1" min="1" class="productQuantity">
        </div>    
    </div>
    `
    ShoppingCartRow.innerHTML = ShoppingCartContent;
    containerProduct.append(ShoppingCartRow);

    localStorage.setItem("lastname", containerProduct);

    ShoppingCartRow.querySelector('.btnDeleteItem').addEventListener('click', removeShoppingCartItem);
    ShoppingCartRow.querySelector('.productQuantity').addEventListener('change', quantityChange);

    updateShoppingCartTotal();
    let producto = containerProduct.getElementsByClassName('productCart');
    JSON.stringify(localStorage.setItem('productos',producto));
}

function updateShoppingCartTotal(){
    let total = 0;
    let productos = 0;
    const ShoppingCartTotal2 = document.querySelector('.totalProductscart');
    const ShoppingCartTotal = document.querySelector('.totalShopcart');
    const ShoppingCartItems = document.querySelectorAll('.productCart');
    const ShoppingCartCurrentProducts =
    //TOTAL DEL CARRITO
    ShoppingCartItems.forEach((shoppingCartItem) =>{
        const shoppingCartItemPriceElement = shoppingCartItem.querySelector('.productPrice');

        const productPrice = Number(shoppingCartItemPriceElement.textContent.replace('$', ''));

        const shopItemsQuantityElement = shoppingCartItem.querySelector('.productQuantity');

        const shopItemsQuantity = Number(shopItemsQuantityElement.value); 
        
        total = total + productPrice * shopItemsQuantity;
        productos = productos + (shopItemsQuantity * (productPrice / productPrice)); 
    });
    if(productos>0){
        const cartcontainerempty= containerProduct.querySelector('.cartcontainerempty');
        cartcontainerempty.classList.add("false");
    }else{
        const cartcontainerempty= containerProduct.querySelector('.cartcontainerempty');
        cartcontainerempty.classList.remove("false");
    }
    ShoppingCartTotal.innerHTML = `${total}$`;
    ShoppingCartTotal2.innerHTML = `${productos}`;
}

function removeShoppingCartItem (event){
    const BtnClicked = event.target;
    BtnClicked.parentElement.parentElement.parentElement.remove();
    updateShoppingCartTotal();
}

function quantityChange (event){
    const input = event.target;
    updateShoppingCartTotal();
}

console.log(localStorage.getItem('productos'));