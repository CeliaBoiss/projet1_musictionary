mybutton = document.getElementById('returnTop');

//Make a "go top" button appear when we scroll down the page
function scrollFunction() {
  if (document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

//when click on "go top" button, return to the top of the page
function topFunction() {
    document.documentElement.scrollTop = 0;
} 

window.addEventListener('scroll', scrollFunction);
mybutton.addEventListener('click', topFunction);