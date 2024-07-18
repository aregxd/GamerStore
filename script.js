let addToCart = document.querySelectorAll(".add-to-cart");
addToCart.forEach( btn =>{

    btn.addEventListener('click',()=>{
        btn.innerHTML = `<i class="fa-solid fa-circle-check"></i> Item added to cart`;
        setTimeout(()=>{
            console.log
            btn.innerHTML = `<i class="fa-solid fa-cart-plus"></i>Add to cart`;
        },4000);
    });

});


