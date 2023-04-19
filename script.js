var navLinks = document.getElementById("navLinks");
function showMenu(){
  navLinks.style.right="0";
}
function hideMenu(){
  navLinks.style.right="-200px";
}


var x = document.getElementById('login');
var y = document.getElementById('register');
var z = document.getElementById('btn');

function register(){
  x.style.left = "-450px";
  y.style.left = "50px";
  z.style.left = "110px"
    } 

function login(){
  x.style.left = "50px";
  y.style.left = "450px";
  z.style.left = "0"
} 