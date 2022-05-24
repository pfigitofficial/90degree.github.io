var futureDate = new Date().getTime() + 30*60000;
var endBtn = document.getElementById("submitBtn");

var x = setInterval(function () {

    var countDownDate = new Date().getTime();

    var distance = futureDate - countDownDate;

    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("timer").innerHTML = minutes + ":" + seconds;

    if(document.getElementById("timer").innerHTML == "0:0"){
        clearInterval(x);
        document.getElementById("tab02").click();

    }
})

