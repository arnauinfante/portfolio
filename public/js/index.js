$(document).ready(function(){

    particlesJS.load('particles-js','libs/particles_js/particles_conf.json');
    getIdiomas();
    getLenguajes();
});

function getIdiomas(){


   var datos = {
        type: "get",
        url: "./api/idioma",
        dataType: 'json',
        async: true,
        success: function(json){
            idiomas = JSON.stringify(json);
            idiomasOBJ = $.parseJSON(idiomas);
            console.log(idiomas);
            idiomasOBJ['data'].forEach(function(idioma, index){
                $('.idiomas').append('<tr id=' + idioma.id + '><td>' + idioma.nom + '</td><td>' + idioma.nivell + '</td></tr>')
            });
        },
        error: function(){
            console.log('error');
        }
    };
    ajax(datos);
}
function getLenguajes(){

    var datos = {
        type: "get",
        url: "./api/lenguaje",
        dataType: 'json',
        async: true,
        success: function(json){
            lenguajes = JSON.stringify(json);
            lenguajesOBJ = $.parseJSON(lenguajes);
            console.log(lenguajes);
            lenguajesOBJ['data'].forEach(function(lenguaje, index){
                $('.lenguajes').append('<tr id=' + lenguaje.id + '><td>' + lenguaje.nom + '</td><td>' + lenguaje.anys + '</td></tr>')
            });
        },
        error: function(){
            console.log('error');
        }
    }
    ajax(datos);
}
function ajax(datos){
    $.ajax(datos);
}

