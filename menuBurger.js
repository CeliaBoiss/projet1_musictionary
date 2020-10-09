function openNav() {
    if (window.matchMedia("(min-width: 812px)").matches) {
        document.getElementById('mySideNav').style.width = "250px";
    } else {
        document.getElementById('mySideNav').style.width = "160px";
    }
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