let myTimer = document.querySelector('#timer');
let myInterval = null;
let seconds = 10;

function removeSecond()
{
    if (seconds >= 0) {
        myTimer.innerHTML = "Tu seras redirigé vers l'accueil dans " + seconds + " seconde(s) ...";
        seconds--;
    }
}

function countDown()
{
    myInterval = setInterval(removeSecond, 1000);
}

document.body.addEventListener('load',countDown());