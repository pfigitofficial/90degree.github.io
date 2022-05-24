var slide = document.getElementById("sliderFrame");
var btn1 = document.getElementById("btn01");
var btn2 = document.getElementById("btn02");
var btn3 = document.getElementById("btn03");
var btn4 = document.getElementById("btn04");

function btn1slide(){
    slide.style.transform = "translateX(0px)";
    btn1.classList.add("active");
    btn2.classList.remove("active");
    btn3.classList.remove("active");
    btn4.classList.remove("active");
    setTimeout(btn2slide, 3000);
}

function btn2slide(){
    slide.style.transform = "translateX(-100%)";
    btn2.classList.add("active");
    btn1.classList.remove("active");
    btn3.classList.remove("active");
    btn4.classList.remove("active");
    setTimeout(btn3slide, 3000);
}

function btn3slide(){
    slide.style.transform = "translateX(-200%)";
    btn3.classList.add("active");
    btn1.classList.remove("active");
    btn2.classList.remove("active");
    btn4.classList.remove("active");
    setTimeout(btn4slide, 3000);
}

function btn4slide(){
    slide.style.transform = "translateX(-300%)";
    btn4.classList.add("active");
    btn1.classList.remove("active");
    btn2.classList.remove("active");
    btn3.classList.remove("active");
    setTimeout(btn1slide, 3000);
}