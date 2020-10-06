function openNav() {
    if (window.matchMedia("(min-width: 812px)").matches) {
        document.getElementById("mySideNav").style.width = "200px";
    } else {
        document.getElementById("mySideNav").style.width = "100px";
    }
}

function closeNav() {
    document.getElementById("mySideNav").style.width = "0";
}

const burgerButton = document.querySelector('.openButton');
const closeButton = document.querySelector('.closeButton');

burgerButton.addEventListener('click',openNav);
closeButton.addEventListener('click',closeNav);