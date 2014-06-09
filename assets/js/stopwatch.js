getTime();

function getTime(){
    //create new date object
    now = new Date();
    //objetive date
    objetiveDate = new Date("Jun 12 2014 17:00:00");

    //se obtienen los dias
    days = (objetiveDate - now) / 1000 / 60 / 60 / 24;
    daysRound = Math.floor(days);
    //se obtienen las horas
    hours = (objetiveDate - now) / 1000 / 60 / 60 - (24 * daysRound);
    hoursRound = Math.floor(hours);
    //se obtienen los minutos
    minutes = (objetiveDate - now) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
    minutesRound = Math.floor(minutes);
    //se obtienen los segundos
    seconds = (objetiveDate - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
    secondsRound = Math.round(seconds);

    //Se asigna una cadena en plural si son mas de 1 o singular si es 1
    sec = (secondsRound == 1) ? " segundo" : " segundos";
    min = (minutesRound == 1) ? " minuto" : " minutos, ";
    hr = (hoursRound == 1) ? " hora" : " horas, ";
    day = (daysRound == 1)  ? " d&iacute;a" : " d&iacute;as, ";

    //Muestra el contador en el documento HTML
    //document.getElementById("stopwatch").innerHTML = "Faltan " + daysRound  + day + hoursRound + hr + minutesRound + min + secondsRound + sec;
    //document.getElementById("minstopwatch").innerHTML = daysRound  + day + hoursRound + hr + minutesRound + min + secondsRound + sec;
    document.getElementById("headerstopwatch").innerHTML = "Faltan <span>" + daysRound  + day + hoursRound + hr + minutesRound + min + secondsRound + sec + "</span> <br>para el primer partido del mundial";

    //manda llamar la funcion getTime cada 1 segundo
    newtime = window.setTimeout("getTime();", 1000);
}