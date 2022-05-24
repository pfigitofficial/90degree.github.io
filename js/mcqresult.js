
var slide01 = document.getElementById("testBox01");
var slide02 = document.getElementById("testBox02");
var slide03 = document.getElementById("testBox03");

var question01 = document.getElementById("tab01");
var question02 = document.getElementById("tab02");
var question03 = document.getElementById("tab03");

var correctPara = document.getElementById("anserTypePara-correct");
var correctRound = document.getElementById("round-correct");

var wrongPara = document.getElementById("anserTypePara-wrong");
var wrongRound = document.getElementById("round-wrong");

var missedPara = document.getElementById("anserTypePara-missed");
var missedRound = document.getElementById("round-missed");


function result01Slide() {
    console.log('clicked01');
    slide01.style.transform = "translateX(0px)";
    slide02.style.transform = "translateX(100%)";
    slide03.style.transform = "translateX(200%)";

    correctPara.classList.add("activeCorrectPara");
    correctRound.classList.add("activeCorrectRound");

    wrongPara.classList.remove("activeWrongPara");
    wrongRound.classList.remove("activeWrongRound");

    missedPara.classList.remove("activeMissedPara");
    missedRound.classList.remove("activeMissedRound");


}

function result02Slide() {
    console.log('clicked02');
    slide01.style.transform = "translateX(0px)";
    slide02.style.transform = "translateX(-100%)";
    slide03.style.transform = "translateX(200%)";

    correctPara.classList.remove("activeCorrectPara");
    correctRound.classList.remove("activeCorrectRound");

    wrongPara.classList.add("activeWrongPara");
    wrongRound.classList.add("activeWrongRound");

    missedPara.classList.remove("activeMissedPara");
    missedRound.classList.remove("activeMissedRound");
}

function result03Slide() {
    console.log('clicked03');
    slide01.style.transform = "translateX(0px)";
    slide02.style.transform = "translateX(-100%)";
    slide03.style.transform = "translateX(-200%)";

    correctPara.classList.remove("activeCorrectPara");
    correctRound.classList.remove("activeCorrectRound");

    wrongPara.classList.remove("activeWrongPara");
    wrongRound.classList.remove("activeWrongRound");

    missedPara.classList.add("activeMissedPara");
    missedRound.classList.add("activeMissedRound");
}



