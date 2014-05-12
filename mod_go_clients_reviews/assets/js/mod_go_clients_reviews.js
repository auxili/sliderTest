var dived;
var numbers;
var cont;
var pintado = false;
$(document).ready(function() {
    dived = null;
    numbers = null;
    cont = 0;
    carga_cita_aleatoria();
});
//STRACKOVERFLOW POWNED random no repeat (done via PHP with shuffle(array);)
//function shuffle(o) {
//    for (var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x)
//        ;
//    return o;
//}
//;
function carga_divs() {
    numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    dived = new Array();
    for (i = 0; i <= numbers.length - 1; i++) {
        if (document.getElementById('cita' + numbers[i])) {
            dived[i] = document.getElementById('cita' + numbers[i]).innerHTML;
        } else
            dived[i] = 0;
    }
}
function insert_in_carousel() {
    $("#misCitas").delay(200).animate({
        "opacity": "1"}, 2500);
    if (cont > 9) {
        cont = 0;
    }
    pintado = false;
    aux = cont;
    for (i = cont; i < 10 && pintado === false; i++) {
        if (dived[aux].length > 10) {
            document.getElementById('misCitas').innerHTML = "<div class='cita_actual'>" + dived[aux]+"</div>";
            $("#misCitas").css({"opacity": "0"});
            pintado = true;
            cont=aux;
        } else {
            aux++;
        }
    }
    cont++;
    aux=0;
}
function carga_cita_aleatoria() {
    carga_divs();
    insert_in_carousel();
    setInterval(function() {
        insert_in_carousel();
    }, 5000);
}