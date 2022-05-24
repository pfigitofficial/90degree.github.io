
var slide01 = document.getElementById("testBox01");
var slide02 = document.getElementById("testBox02");
var slide03 = document.getElementById("testBox03");
var slide04 = document.getElementById("testBox04");
var slide05 = document.getElementById("testBox05");
var slide06 = document.getElementById("testBox06");
var slide07 = document.getElementById("testBox07");
var slide08 = document.getElementById("testBox08");
var slide09 = document.getElementById("testBox09");
var slide010 = document.getElementById("testBox010");

var question01 = document.getElementById("tab01");
var question02 = document.getElementById("tab02");
var question03 = document.getElementById("tab03");
var question04 = document.getElementById("tab04");
var question05 = document.getElementById("tab05");
var question06 = document.getElementById("tab06");
var question07 = document.getElementById("tab07");
var question08 = document.getElementById("tab08");
var question09 = document.getElementById("tab09");
var question010 = document.getElementById("tab010");



function question01Slide() {
    slide01.style.transform = "translateX(0px)"
    slide02.style.transform = "translateX(100%)"
    slide03.style.transform = "translateX(200%)";
    slide04.style.transform = "translateX(300%)";
    slide05.style.transform = "translateX(400%)";
    slide06.style.transform = "translateX(500%)";
    slide07.style.transform = "translateX(600%)";
    slide08.style.transform = "translateX(700%)";
    slide09.style.transform = "translateX(800%)";
    slide010.style.transform = "translateX(900%)";

    question01.classList.add("active");
    question02.classList.remove("active");
    question03.classList.remove("active");
    question04.classList.remove("active");
    question05.classList.remove("active");
    question06.classList.remove("active");
    question07.classList.remove("active");
    question08.classList.remove("active");
    question09.classList.remove("active");
    question010.classList.remove("active");
}


function question02Slide() {
    slide01.style.transform = "translateX(0px)"
    slide02.style.transform = "translateX(-100%)"
    slide03.style.transform = "translateX(200%)";
    slide04.style.transform = "translateX(300%)";
    slide05.style.transform = "translateX(400%)";
    slide06.style.transform = "translateX(500%)";
    slide07.style.transform = "translateX(600%)";
    slide08.style.transform = "translateX(700%)";
    slide09.style.transform = "translateX(800%)";
    slide010.style.transform = "translateX(900%)";

    question01.classList.remove("active");
    question02.classList.add("active");
    question03.classList.remove("active");
    question04.classList.remove("active");
    question05.classList.remove("active");
    question06.classList.remove("active");
    question07.classList.remove("active");
    question08.classList.remove("active");
    question09.classList.remove("active");
    question010.classList.remove("active");
}

function question03Slide() {
    slide01.style.transform = "translateX(0px)"
    slide02.style.transform = "translateX(-100%)"
    slide03.style.transform = "translateX(-200%)";
    slide04.style.transform = "translateX(300%)";
    slide05.style.transform = "translateX(400%)";
    slide06.style.transform = "translateX(500%)";
    slide07.style.transform = "translateX(600%)";
    slide08.style.transform = "translateX(700%)";
    slide09.style.transform = "translateX(800%)";
    slide010.style.transform = "translateX(900%)";

    question01.classList.remove("active");
    question02.classList.remove("active");
    question03.classList.add("active");
    question04.classList.remove("active");
    question05.classList.remove("active");
    question06.classList.remove("active");
    question07.classList.remove("active");
    question08.classList.remove("active");
    question09.classList.remove("active");
    question010.classList.remove("active");
}

function question04Slide() {
    slide01.style.transform = "translateX(0px)"
    slide02.style.transform = "translateX(-100%)"
    slide03.style.transform = "translateX(-200%)";
    slide04.style.transform = "translateX(-300%)";
    slide05.style.transform = "translateX(400%)";
    slide06.style.transform = "translateX(500%)";
    slide07.style.transform = "translateX(600%)";
    slide08.style.transform = "translateX(700%)";
    slide09.style.transform = "translateX(800%)";
    slide010.style.transform = "translateX(900%)";

    question01.classList.remove("active");
    question02.classList.remove("active");
    question03.classList.remove("active");
    question04.classList.add("active");
    question05.classList.remove("active");
    question06.classList.remove("active");
    question07.classList.remove("active");
    question08.classList.remove("active");
    question09.classList.remove("active");
    question010.classList.remove("active");
}

function question05Slide() {
    slide01.style.transform = "translateX(0px)"
    slide02.style.transform = "translateX(-100%)"
    slide03.style.transform = "translateX(-200%)";
    slide04.style.transform = "translateX(-300%)";
    slide05.style.transform = "translateX(-400%)";
    slide06.style.transform = "translateX(500%)";
    slide07.style.transform = "translateX(600%)";
    slide08.style.transform = "translateX(700%)";
    slide09.style.transform = "translateX(800%)";
    slide010.style.transform = "translateX(900%)";

    question01.classList.remove("active");
    question02.classList.remove("active");
    question03.classList.remove("active");
    question04.classList.remove("active");
    question05.classList.add("active");
    question06.classList.remove("active");
    question07.classList.remove("active");
    question08.classList.remove("active");
    question09.classList.remove("active");
    question010.classList.remove("active");
}

function question06Slide() {
    slide01.style.transform = "translateX(0px)"
    slide02.style.transform = "translateX(-100%)"
    slide03.style.transform = "translateX(-200%)";
    slide04.style.transform = "translateX(-300%)";
    slide05.style.transform = "translateX(-400%)";
    slide06.style.transform = "translateX(-500%)";
    slide07.style.transform = "translateX(600%)";
    slide08.style.transform = "translateX(700%)";
    slide09.style.transform = "translateX(800%)";
    slide010.style.transform = "translateX(900%)";

    question01.classList.remove("active");
    question02.classList.remove("active");
    question03.classList.remove("active");
    question04.classList.remove("active");
    question05.classList.remove("active");
    question06.classList.add("active");
    question07.classList.remove("active");
    question08.classList.remove("active");
    question09.classList.remove("active");
    question010.classList.remove("active");
}

function question07Slide() {
    slide01.style.transform = "translateX(0px)"
    slide02.style.transform = "translateX(-100%)"
    slide03.style.transform = "translateX(-200%)";
    slide04.style.transform = "translateX(-300%)";
    slide05.style.transform = "translateX(-400%)";
    slide06.style.transform = "translateX(-500%)";
    slide07.style.transform = "translateX(-600%)";
    slide08.style.transform = "translateX(700%)";
    slide09.style.transform = "translateX(800%)";
    slide010.style.transform = "translateX(900%)";

    question01.classList.remove("active");
    question02.classList.remove("active");
    question03.classList.remove("active");
    question04.classList.remove("active");
    question05.classList.remove("active");
    question06.classList.remove("active");
    question07.classList.add("active");
    question08.classList.remove("active");
    question09.classList.remove("active");
    question010.classList.remove("active");
}

function question08Slide() {
    slide01.style.transform = "translateX(0px)"
    slide02.style.transform = "translateX(-100%)"
    slide03.style.transform = "translateX(-200%)";
    slide04.style.transform = "translateX(-300%)";
    slide05.style.transform = "translateX(-400%)";
    slide06.style.transform = "translateX(-500%)";
    slide07.style.transform = "translateX(-600%)";
    slide08.style.transform = "translateX(-700%)";
    slide09.style.transform = "translateX(800%)";
    slide010.style.transform = "translateX(900%)";

    question01.classList.remove("active");
    question02.classList.remove("active");
    question03.classList.remove("active");
    question04.classList.remove("active");
    question05.classList.remove("active");
    question06.classList.remove("active");
    question07.classList.remove("active");
    question08.classList.add("active");
    question09.classList.remove("active");
    question010.classList.remove("active");
}

function question09Slide() {
    slide01.style.transform = "translateX(0px)"
    slide02.style.transform = "translateX(-100%)"
    slide03.style.transform = "translateX(-200%)";
    slide04.style.transform = "translateX(-300%)";
    slide05.style.transform = "translateX(-400%)";
    slide06.style.transform = "translateX(-500%)";
    slide07.style.transform = "translateX(-600%)";
    slide08.style.transform = "translateX(-700%)";
    slide09.style.transform = "translateX(-800%)";
    slide010.style.transform = "translateX(900%)";

    question01.classList.remove("active");
    question02.classList.remove("active");
    question03.classList.remove("active");
    question04.classList.remove("active");
    question05.classList.remove("active");
    question06.classList.remove("active");
    question07.classList.remove("active");
    question08.classList.remove("active");
    question09.classList.add("active");
    question010.classList.remove("active");
}

function question010Slide() {
    slide01.style.transform = "translateX(0px)"
    slide02.style.transform = "translateX(-100%)"
    slide03.style.transform = "translateX(-200%)";
    slide04.style.transform = "translateX(-300%)";
    slide05.style.transform = "translateX(-400%)";
    slide06.style.transform = "translateX(-500%)";
    slide07.style.transform = "translateX(-600%)";
    slide08.style.transform = "translateX(-700%)";
    slide09.style.transform = "translateX(-800%)";
    slide010.style.transform = "translateX(-900%)";

    question01.classList.remove("active");
    question02.classList.remove("active");
    question03.classList.remove("active");
    question04.classList.remove("active");
    question05.classList.remove("active");
    question06.classList.remove("active");
    question07.classList.remove("active");
    question08.classList.remove("active");
    question09.classList.remove("active");
    question010.classList.add("active");
}