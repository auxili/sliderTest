$('.carousel').carousel();
$(document).ready(function() {
    dived = null;
    numbers = null;
    cont = 0;
    carga_cita_aleatoria();
});
//STRACKOVERFLOW POWNED aleatorios no repeat
function shuffle(o) {
    for (var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x)
        ;
    return o;
}
;
function carga_divs() {
    numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    random1 = shuffle(numbers);
    dived = new Array();
    for (i = 0; i <= 9; i++) {
        dived[i] = document.getElementById('cita' + random1[i]).innerHTML;
    }
}
function insert_in_carousel() {
    alert(random1);
    if (cont > 9)
        cont = 0;
    document.getElementById('misCitas').innerHTML = "<div class='cita_actual'>" + dived[cont] + "</div>";
    cont++;
}
function carga_cita_aleatoria() {
    carga_divs();
    insert_in_carousel();
    setInterval(function() {
        insert_in_carousel();
    }, 4500);
}

//   aleatorio = Math.random() * (dived.length);
//   aleatorio = Math.floor(aleatorio);

//    var almacenDived = new Array();
//    for (var i = 0; i <= dived.length; i++) {
//        aleatorio = Math.random() * (dived.length);
//        aleatorio = Math.floor(aleatorio);
//        almacenDived[i] = aleatorio;
//    }
//    for (var i = 0; i <= almacenDived.length; i++) {
//       dived[i] = document.getElementById('cita'+almacenDived[i]).innerHTML;
//    }
//alert("antes de aleatorio");
//var usados = new Array();
//var numeroNuevo = aleatorio(1, 10);


//function aleatorio(min, max) {
//    if (usados.length <= (max - min)) {
//        while (repe !== false) {
//            var num = Math.floor(Math.random() * (max - min + 1)) + min;
//            var repe = repetido(num);
//        }
//        usados.push(num);
//        return num;
//    } else {
//        return null;
//    }
//}
//function repetido(num) {
//    var repe = false;
//    for (i = 0; i < usados.length; i++) {
//        if (num === usados[i]) {
//            repe = true;
//        }
//    }
//    return repe;
//}
//alert(numeroNuevo);
//alert(trace(numeroNuevo));




