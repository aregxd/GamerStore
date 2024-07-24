//text on card changes
let addToCart = document.querySelectorAll(".add-to-cart");
addToCart.forEach( btn =>{

    btn.addEventListener('click',()=>{
        btn.innerHTML = `<i class="fa-regular fa-hourglass-half fa-spin"></i> Processing order.`;
        setTimeout(()=>{
            btn.innerHTML = `<i class="fa-solid fa-cart-plus"></i>BUY NOW`;
        },4000);
    });

});




