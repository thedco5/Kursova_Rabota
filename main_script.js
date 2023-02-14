let navLinks = document.getElementById("navLinks");
function showMenu() { navLinks.style.right = "0"; }
function hideMenu() { navLinks.style.right = "-200px"; }

let cookie = document.cookie;
let profileElement = document.createElement("a");
if (cookie) {
    profileElement.href = "temp_prof.html";
    profileElement.innerText = cookie.replace("usr=", "");
    navLinks.appendChild(profileElement);
    document.getElementById("navLinks").append(" | ");
    let signoutElement = document.createElement("a");
    signoutElement.href = "sign_forms/sign_out.php";
    signoutElement.innerText = "ИЗХОД";
    navLinks.appendChild(signoutElement);
} else {
    profileElement.href = "sign_forms/sign_in.php";
    profileElement.innerText = "ВХОД";
    navLinks.appendChild(profileElement);
    document.getElementById("navLinks").append(" | ");
    let registerElement = document.createElement("a");
    registerElement.href = "sign_forms/sign_up.php";
    registerElement.innerText = "РЕГИСТРАЦИЯ";
    navLinks.appendChild(registerElement);
}