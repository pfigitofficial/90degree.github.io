// Modal Variables
var chatboxmodal = document.getElementById("chatBoxModal");
var diagrammodal = document.getElementById("diagramModal");
var videosmodal = document.getElementById("videosModal");
var simulationsmodal = document.getElementById("simulationsModal");
var toolsmodal = document.getElementById("toolsModal");


//ModalBtns
var chatboxbtn = document.getElementById("chatBoxBtn");
var diagrambtn = document.getElementById("diagramBtn");
var videosbtn = document.getElementById("videosBtn");
var simulationsbtn = document.getElementById("simulationsBtn");
var toolsbtn = document.getElementById("toolsBtn");


//Modal Closers
var chatboxclose = document.getElementById("chatBoxClose");
var diagramclose = document.getElementById("diagramClose");
var videosclose = document.getElementById("videosClose");
var simulationsclose = document.getElementById("simulationsClose");
var toolsclose = document.getElementById("toolsClose");



chatboxbtn.onclick = function () {chatboxmodal.style.display = "flex"; console.log('Clicked from 2')}
chatboxclose.onclick = function(){chatboxmodal.style.display = "none"}

diagrambtn.onclick = function () {diagrammodal.style.display = "flex";}
diagramclose.onclick = function(){diagrammodal.style.display = "none"}

videosbtn.onclick = function () {videosmodal.style.display = "flex";}
videosclose.onclick = function(){videosmodal.style.display = "none"}

simulationsbtn.onclick = function () {simulationsmodal.style.display = "flex";}
simulationsclose.onclick = function(){simulationsmodal.style.display = "none"}

toolsbtn.onclick = function () {toolsmodal.style.display = "flex";}
toolsclose.onclick = function(){toolsmodal.style.display = "none"}


window.onclick = function(){
    if (event.target == chatboxmodal) {chatboxmodal.style.display = "none";}
    if (event.target == diagrammodal) {diagrammodal.style.display = "none";}
    if (event.target == videosmodal) {videosmodal.style.display = "none";}
    if (event.target == simulationsmodal) {simulationsmodal.style.display = "none";}
    if (event.target == toolsmodal) {toolsmodal.style.display = "none";}


}



