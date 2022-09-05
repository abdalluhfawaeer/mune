window.onscroll = function() {
    myFunction()
};

var myTopnav = document.getElementById("myTopnav"); 
var sticky = myTopnav.offsetTop;

function myFunction() {
    
    if (window.pageYOffset > sticky) {
        myTopnav.classList.add("sticky1");
        myTopnav.style.display = 'block';
    } else {
        myTopnav.classList.remove("sticky1");
        myTopnav.style.display = 'none';
    }
}
$("#nav").scrollspy({
    offset: -85
});

function check(id) {
    document.getElementById('page11').checked = false;
}

function myFunction1() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav sticky1") {
        x.className += " responsive";
        document.getElementById("nav").style.top = '155px';
    } else {
        x.className = "topnav sticky1";
        document.getElementById("nav").style.top = '60px';
    }
}