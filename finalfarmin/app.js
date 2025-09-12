let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})


let products = [
    {
        id: 1,
        name: 'Potato',
        price: 40,
    },
    {
        id: 2,
        name: 'Tomato',
        price: 20,
    },
    {
        id: 3,
        name: 'Cabbage',
        
        price: 30,
    },
    {
        id: 4,
        name: 'cobi',
        
        price: 25,
    },
    {
        id: 5,
        name: 'Bhendi',
        
        price: 30,
    },
    {
        id: 6,
        name: 'Capsicum',
        price: 30,
    },
    {
        id:7,
        name: 'Gavar',
        price : 25,
    },
    {
        id:8,
        name:'Brinjel',
        price:30,
    },
    {
        id:9,
        name:'Matar (beans)',
        price:50,
     },
     {
        id:10,
        name:'pavta',
        price:20,
     },
     {
        id:11,
        name:'limbu',
        price:4,

     },
     {
        id:12,
        name:'onoin',
        price:20,
     },
     {
        id:13,
        name:'apple',
        price:80,
     },
     {
        id:14,
        name:'banana',
        price:40,
     },
     {
        id:15,
        name:'chiku',
        price:50
     },
     {
        id:16,
        name:'custered aaple',
        price:150,
     },
     {
        id:17,
        name:"pineapple",
        price:70
     },
     {
        id:18,
        name:'pomogranate',
        price:110
     },
     {
        id:19,
        name:'Grapes',
        price:120,
     },
     {
        id:20,
        name:'black grapes',
        price:110,
     },
     {
        id:21,
        name:'orange',
        price:70,
     },
     {
        id:22,
        name:'strawberry',
        price:200,
     },
     {
        id:23,
        name:'gauva',
        price:90
     },
     {
        id:24,
        name:'almond',
        price:170 
     },
     {
        id:25,
        name:'kaju',
        price:125,
     },
     {
        id:26,
        name:"pista",
        price:270
     },
     {
        id:27,
        name:'kalle khajur',
        price:340
     },
     {
        id:28,
        name:'khajur',
        pirce:200
     },
     {
        id:29,
        name:'lall khajur',
        price:180
     },
     {
        id:30,
        name:'Mix DryFruit basket',
        price:780,
     },
     {
        id:31,
        name:"Dry khajur",
        price:40,
     },
     {
        id:32,
        name:'manuke',
        price:49,
     },
     {
        id:33,
        name:'kalle manuke',
        price:51,
     },
     {
      id:34,
      name:'chana dal',
      price:110,
     },
     {
      id:35,
      name:'moong dal',
      price:200
     },
     {
      id:36,
      name:'urad dal',
      price:180
     },
     {
      id:37,
      name:'Toor dal',
      price:100
     },
     {
      id:38,
      name:'Masoor dal',
      price:63,
     },
     {
      id:39,
      name:'dal cart',
      price:350
     },
     {
      id:40,
      name:'chole',
      price:180
     },
     {
      id:41,
      name:'rajma',
      price:160
     },
     {
      id:42,
      name:'groundnut',
      price:120
     },
     {
      id:43,
      name:'moong sproted',
      price:50
     }


];
let listCards  = [];

function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}

/* for checkout the cart with minimun vales*/

total.addEventListener('click', () => {
    const totalPrice = parseFloat(total.innerText.replace(/,/g, '')); // Convert total price to a number

    function cal() {
        alert("To checkout, you must have at least 4 items with a total price greater than 100");
    }
    if (totalPrice < 100) {
        cal();
    } else {
        // Perform the checkout or any other action you want
        alert("Checkout Successful!");
       window.open("chekout.php","_blank");
        // You can add more logic here if needed
    }
});

// Rest of your existing code...
