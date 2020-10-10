mybutton = document.getElementById('returnTop');
myTitle = document.getElementById('title');
myLetters = document.querySelectorAll('.letterRed');

//Make the letters M and T go a different red when the title is mouseover
function changeColorTitle () {
  myLetters[0].style.color= "#b61401";
  myLetters[1].style.color= "#b61401";
}

//Cancel the change of color and set the default color of title when mouse leave the title
function cancelChangeColorTitle () {
  myLetters[0].style.color= "red";
  myLetters[1].style.color= "red";
}

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
myTitle.addEventListener('mouseover', changeColorTitle);
myTitle.addEventListener('mouseleave', cancelChangeColorTitle);