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



//onclick event log in button//


 