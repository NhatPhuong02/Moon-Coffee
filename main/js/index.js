const container = document.querySelector('.container')
const btnSignIn = document.querySelector('.btnSign-in')
const btnSignUp = document.querySelector('.btnSign-up')

btnSignIn.addEventListener('click', () => {
    container.classList.add('active')
})

btnSignUp.addEventListener('click', () => {
    container.classList.remove('active')
})

$(window).bind('mousewheel', function (event) {
    if (event.originalEvent.wheelDelta >= 0) {
        //scroll up
        document.getElementById("navbar").style.top = "0";
        if (window.pageYOffset <= 10 ) {
            document.getElementById("navbar").style.backgroundColor = "rgb(84, 45, 33, 0)";
        }
        else {
            document.getElementById("navbar").style.backgroundColor = "rgb(84, 45, 33)";
        }
    }
    else {
        //scroll down
        document.getElementById("navbar").style.top = "-100%";
    }
});