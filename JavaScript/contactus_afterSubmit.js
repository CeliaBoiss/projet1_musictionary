let myTimer = document.querySelector('#timer');
let myInterval = null;
let seconds = 10;

function removeSecond()
{
    if (seconds >= 0) {
        myTimer.innerHTML = "You will be redirected to our home page in " + seconds + " seconds(s) ...";
        seconds--;
    }
}

function countDown()
{
    myInterval = setInterval(removeSecond, 1000);
}

document.body.addEventListener('load',countDown());