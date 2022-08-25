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
    
    const idProduct = product.querySelector('.id_product').getAttribute('data-id');

    const productStock = product.querySelector('.stock_product').getAttribute('data-stock');

    const infoProduct = {
        id: idProduct,
        nombre: titleProduct,
        precio: priceProduct,
        imagen: imgProduct,
        stock: productStock,
        cantidad: 1
    }

    addProductToShoppingCart(titleProduct,priceProduct,imgProduct,infoProduct);
}

function addProductToShoppingCart(titleProduct,priceProduct,imgProduct,infoProduct){
    const title = containerProduct.getElementsByClassName('title_product');

    let productsLS;
    productsLS = this.obtenerProductosLocalStorage();
    productsLS.forEach((productsLS,index)=>{
        if(infoProduct.id === productsLS.id){
            productsLS = this.obtenerProductosLocalStorage();
            let ElementQuantity = title[index].parentElement.parentElement.querySelector('.productQuantity');
            if(infoProduct.stock>productsLS[index].cantidad){
                ElementQuantity.value++;
            }
            updateShoppingCartTotal(infoProduct.id);
            exit();
        }
    })

    let quantity = infoProduct.cantidad>infoProduct.stock ? infoProduct.stock : infoProduct.cantidad

    const ShoppingCartRow = document.createElement('div');
    const ShoppingCartContent = `
    <div class="productCart">
        <input type="hidden" class="id_product" data-id="${infoProduct.id}">
        <div class="p-img-title">
            <span class="title_product">${infoProduct.nombre}</span>
            <img src="${infoProduct.imagen}" alt="" class="img-container">
        </div>
        <h5 class="productPrice">${infoProduct.precio}</h5>
        <div class="p-img-title">
            <i class='bx bx-x btnDeleteItem'></i>
            <input type="number" value="${quantity}" stock="1"  min="1" max="${infoProduct.stock}" class="productQuantity">
        </div>    
    </div>
    `
    
    ShoppingCartRow.innerHTML = ShoppingCartContent;
    containerProduct.append(ShoppingCartRow);

    ShoppingCartRow.querySelector('.btnDeleteItem').addEventListener('click', removeShoppingCartItem);
    ShoppingCartRow.querySelector('.productQuantity').addEventListener('change', quantityChange);

    updateShoppingCartTotal(infoProduct.id);
    guardarLocalStorage(infoProduct);
}

function updateShoppingCartTotal(productID){
    let total = 0;
    let productos = 0;
    let productsLS;
    const ShoppingCartTotal2 = document.querySelector('.totalProductscart');
    const ShoppingCartTotal = document.querySelector('.totalShopcart');
    const ShoppingCartItems = document.querySelectorAll('.productCart');
    const ShoppingCartTotalItems = document.querySelector('.totalProducts');

    //TOTAL DEL CARRITO
    ShoppingCartItems.forEach((shoppingCartItem) =>{
        const shoppingCartItemPriceElement = shoppingCartItem.querySelector('.productPrice');

        const productPrice = Number.parseFloat(shoppingCartItemPriceElement.textContent.replace('$', ''));

        const shopItemsQuantityElement = shoppingCartItem.querySelector('.productQuantity');

        const shopItemsQuantity = Number(shopItemsQuantityElement.value); 

        productsLS = this.obtenerProductosLocalStorage();
        productsLS.map(function(products){
            if(products.id === productID){
                products.cantidad = shopItemsQuantity;
            }
        })

        localStorage.setItem('productos', JSON.stringify(productsLS));

        total = total + productPrice * shopItemsQuantity;
        productos = productos + (shopItemsQuantity * (productPrice / productPrice)); 
    });
    if(productos>0){
        const cartcontainerempty= containerProduct.querySelector('.cartcontainerempty');
        cartcontainerempty.classList.add("false");
        ShoppingCartTotalItems.classList.remove("hidden");
        ShoppingCartTotalItems.innerHTML = `${productos}`;
    }else{
        const cartcontainerempty= containerProduct.querySelector('.cartcontainerempty');
        cartcontainerempty.classList.remove("false");
        ShoppingCartTotalItems.classList.add("hidden");
    }
    ShoppingCartTotal.innerHTML = `${total.toFixed(2)}$`;
    ShoppingCartTotal2.innerHTML = `${productos}`;
}

function removeShoppingCartItem (event){
    const BtnClicked = event.target;
    const divProductContainer = BtnClicked.parentElement.parentElement.parentElement;
    let productID = divProductContainer.querySelector('.id_product').getAttribute('data-id');
    divProductContainer.remove();

    deleteProductLS(productID);

    updateShoppingCartTotal(productID);
}

function quantityChange (event,quantity){
    const input = event.target;
    const divProductContainer = input.parentElement.parentElement;
    const productID = divProductContainer.querySelector('.id_product').getAttribute('data-id');
    const maxQuantity = input.getAttribute('max');

    if(maxQuantity - input.value <= 0){
        input.value=maxQuantity;
    }

    updateShoppingCartTotal(productID);
}

function guardarLocalStorage(infoProduct){
    let productos;
    productos = this.obtenerProductosLocalStorage();
    productos.push(infoProduct);
    localStorage.setItem('productos', JSON.stringify(productos));
}


function obtenerProductosLocalStorage(){

    if(localStorage.getItem('productos') === null){
        productoLS = [];
    }
    else {
        productoLS = JSON.parse(localStorage.getItem('productos'));
    }
    return productoLS;
}

function leerLocalStorage(){
    let productosLS;
    productosLS = this.obtenerProductosLocalStorage();
    productosLS.forEach(function(producto){
        const ShoppingCartRow = document.createElement('div');
        const ShoppingCartContent = `
        <div class="productCart">
            <input type="hidden" class="id_product" data-id="${producto.id}">
            <div class="p-img-title">
                <span class="title_product">${producto.nombre}</span>
                <img src="${producto.imagen}" alt="" class="img-container">
            </div>
            <h5 class="productPrice">${producto.precio}</h5>
            <div class="p-img-title">
                <i class='bx bx-x btnDeleteItem'></i>
                <input type="number" value="${producto.cantidad>producto.stock ? producto.stock : producto.cantidad}" min="1" max="${producto.stock}" class="productQuantity">
            </div>    
        </div>
        `;

        ShoppingCartRow.innerHTML = ShoppingCartContent;
        containerProduct.append(ShoppingCartRow);
        
        ShoppingCartRow.querySelector('.btnDeleteItem').addEventListener('click', removeShoppingCartItem);
        ShoppingCartRow.querySelector('.productQuantity').addEventListener('change', quantityChange);

        updateShoppingCartTotal(producto.id);
    });
}

function deleteProductLS(productID){
    let productLS;
    let position;
    productLS = this.obtenerProductosLocalStorage();

    productLS.map(function(products,index){
        if(products.id === productID){
            position = index;
        }
    })
    productLS.splice(position, 1);

    localStorage.setItem('productos', JSON.stringify(productLS));
}

document.addEventListener('DOMContentLoaded',leerLocalStorage());