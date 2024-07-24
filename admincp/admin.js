// filter toggle
let productBtn = document.querySelector(".btn-product");
let orderBtn = document.querySelector(".btn-order");
let productPage = document.querySelector(".product-wrapper");
let orderPage = document.querySelector(".order-wrapper");
orderPage.style.display="none"; //initialize with display none

productBtn.addEventListener('click',()=>{
    productBtn.classList.add("active");  //for button toggle
    orderBtn.classList.remove("active"); //for button toggle
    
    productPage.style.display="flex"; //for pages display
    orderPage.style.display="none";    //for pages display
});

orderBtn.addEventListener('click',()=>{
    orderBtn.classList.add("active");      //for button toogle
    productBtn.classList.remove("active"); //for button toogle  
    
    orderPage.style.display="flex";  //for pages display
    productPage.style.display="none"; //for pages display
});