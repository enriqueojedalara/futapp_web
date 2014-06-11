getTime();
function getTime(){
    now = new Date();
    objetiveDate = new Date("Jun 12 2014 17:00:00");
    days = (objetiveDate - now) / 1000 / 60 / 60 / 24;
    daysRound = Math.floor(days);
    hours = (objetiveDate - now) / 1000 / 60 / 60 - (24 * daysRound);
    hoursRound = Math.floor(hours);
    minutes = (objetiveDate - now) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
    minutesRound = Math.floor(minutes);
    seconds = (objetiveDate - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
    secondsRound = Math.round(seconds);

    sec = (secondsRound == 1) ? " segundo" : " segundos";
    min = (minutesRound == 1) ? " minuto" : " minutos, ";
    hr = (hoursRound == 1) ? " hora" : " horas, ";
    day = (daysRound == 1)  ? " d&iacute;a " : " d&iacute;as, ";

    document.getElementById("headerstopwatch").innerHTML = "Faltan <span>" + daysRound  + day + hoursRound + hr + minutesRound + min + secondsRound + sec + "</span> <br>para el primer partido del mundial";
    newtime = window.setTimeout("getTime();", 1000);
}