
$('#pais').on('change', function () {
    var paisIn = document.getElementById("pais").value;
    if (paisIn == 'sura') {
        document.getElementById("fechaD").innerHTML = "Miércoles - 02";
        document.getElementById("fechaM").innerHTML = "Octubre 2019";
    } else if (paisIn == 'eur') {
        document.getElementById("fechaD").innerHTML = "Jueves - 22";
        document.getElementById("fechaM").innerHTML = "Agosto 2019";
    }
    else if (paisIn == 'uru') {
        document.getElementById("fechaD").innerHTML = "Miercoles - 21";
        document.getElementById("fechaM").innerHTML = "Agosto 2019";
    }
    else if (paisIn == 'rio') {
        document.getElementById("fechaD").innerHTML = "Martes - 06";
        document.getElementById("fechaM").innerHTML = "Agosto 2019";
    }
    else if (paisIn == 'mex') {
        document.getElementById("fechaD").innerHTML = "Lunes - 12";
        document.getElementById("fechaM").innerHTML = "Agosto 2019";
    }
    else if (paisIn == 'la') {
        document.getElementById("fechaD").innerHTML = "Domingo - 11";
        document.getElementById("fechaM").innerHTML = "Agosto 2019";
    }
    else if (paisIn == 'bog') {
        document.getElementById("fechaD").innerHTML = "Jueves - 09";
        document.getElementById("fechaM").innerHTML = "Agosto 2019";
    }
    else if (paisIn == 'chile') {
        document.getElementById("fechaD").innerHTML = "Domingo - 18";
        document.getElementById("fechaM").innerHTML = "Agosto 2019";
    }
    else if (paisIn == 'esp') {
        document.getElementById("fechaD").innerHTML = "Sábado - 24";
        document.getElementById("fechaM").innerHTML = "Agosto 2019";
    }
    else if (paisIn == 'lima') {
        document.getElementById("fechaD").innerHTML = "Viernes - 30";
        document.getElementById("fechaM").innerHTML = "Agosto 2019";
    }
});

