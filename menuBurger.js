function openNav() {
    document.getElementById('mySideNav').style.width = "250px";
    document.querySelector('.nav').style.display = "flex";
}

function closeNav() {
    document.getElementById('mySideNav').style.width = "0";
    document.querySelector('.nav').style.display = "none";
}

const burgerButton = document.querySelector('.openButton');
const closeButton = document.querySelector('.closeButton');

burgerButton.addEventListener('click',openNav);
closeButton.addEventListener('click',closeNav);