let myTheme = document.querySelector('.mobileTitle');
let myHiddenParagraph = document.getElementById('hidden');

myTheme.addEventListener("click", () => {myHiddenParagraph.style.display = "block";});
myTheme.addEventListener("click", () => {myHiddenParagraph.style.display = "none";});