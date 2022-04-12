const shop = document.querySelector(".shop");
const page = document.querySelector(".page");
const shopBtn = document.querySelector(".bxs-cart");
const ElementShop = document.querySelector(".close");
const closeShopBtn = document.querySelector(".bx-x");
const catalogProduct = document.querySelector(".catalogo-product");
const ExpandMenuRes = document.querySelector(".bxs-chevron-down");
const NavResponsive = document.querySelector(".nav-responsive");
const BtnRotate = document.querySelector(".menu");
shopBtn.addEventListener("click", ()=>{
                                       shop.classList.toggle("open");
                                       page.classList.toggle("open");
                                       ElementShop.classList.toggle("close");
                                       catalogProduct.classList.toggle("openCart");
    })
ExpandMenuRes.addEventListener("click",()=>{
    NavResponsive.classList.toggle("OpenNav");
    BtnRotate.classList.toggle("rotateBtn");
})
closeShopBtn.addEventListener("click", ()=>{
    shop.classList.toggle("open");
    page.classList.toggle("open");
    ElementShop.classList.toggle("close");
    catalogProduct.classList.toggle("openCart");
})