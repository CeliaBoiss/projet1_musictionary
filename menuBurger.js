function openNav() {
    document.getElementById("mySideNav").style.width = "100px";
}

function closeNav() {
    document.getElementById("mySideNav").style.width = "0";
}

const burgerButton = document.querySelector('.openButton');
const closeButton = document.querySelector('.closeButton');

burgerButton.addEventListener('click',openNav);
closeButton.addEventListener('click',closeNav);