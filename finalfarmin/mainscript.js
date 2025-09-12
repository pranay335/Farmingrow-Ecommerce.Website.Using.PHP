let search = document.querySelector('.search');
document.querySelector('#searchbtn').onclick = () => {
    search.classList.toggle('active');
    navbar.classList.remove('active');
    shoopingCart.classList.remove('active');
}


let shoopingCart = document.querySelector('.shoppingcart');
document.querySelector('#cartbtn').onclick = () => {
    shoopingCart.classList.toggle('active');
    search.classList.remove('active');
    navbar.classList.remove('active');

}

let navbar = document.querySelector('.navbar');
document.querySelector('#menubtn').onclick = () => {
    navbar.classList.toggle('active');
    search.classList.remove('active');
    shoopingCart.classList.remove('active');
}

window.onscroll=()=>{
    search.classList.remove('active');
    navbar.classList.remove('active');
    shoopingCart.classList.remove('active');
}

/*for slider*/
var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
   autoplay:{
    delay:2000,
    disableOnInteraction:true,
   },
    breakpoints: {
      0: {
        slidesPerView: 1,
        
      },
      768: {
        slidesPerView: 2,
       
      },
      1020: {
        slidesPerView: 4,
        
      },
    },
  });