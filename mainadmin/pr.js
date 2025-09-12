document.addEventListener('DOMContentLoaded', () => {
   const signinbtn = document.querySelector("#siginpbtn");
   const signupbtn = document.querySelector("#signupbtn");
   const container = document.querySelector(".container");
 
   signupbtn.addEventListener('click', () => {
     container.classList.add("signupmode");
     container.classList.remove("signinmode");
     container.style.transform = "translate(50%, -0%)";
     container.style.right = "50%";
   });
 
   signinbtn.addEventListener('click', () => {
     container.classList.remove("signupmode");
     container.classList.add("signinmode");
     container.style.transform = "";
     container.style.right = ""; 
   });
 });

function sub(){
  var a = document.getElementById('name').value;
  var b = document.getElementById('pass').value;
  if (a=='soham'&& b ==123){
    alert("preparing for login");
    window.location.href='navbar.html';
  }
  else{
   alert('username or password is wrong');
  }
}

//onclick event log in button//


 