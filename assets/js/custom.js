window.addEventListener("DOMContentLoaded",()=>{


  var currentdate = new Date();
  var datetime =  currentdate.getDay() + "/" + currentdate.getMonth() 
  + "/" + currentdate.getFullYear() + "  " 
  + currentdate.getHours() + ":" 
  + currentdate.getMinutes() + ":" + currentdate.getSeconds();


    document.getElementById("date").innerHTML = datetime;

})

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar1");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}