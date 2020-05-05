// countdown 60 seconds

var time = 60;

setInterval(skaiciuotiLaika, 1000);

function skaiciuotiLaika() {
    time--;
    if (time < 0) {

    } else {
        $("#timer span").text(time + " s");
    }
}
