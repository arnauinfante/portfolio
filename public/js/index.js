$(document).ready(function(){

    particlesJS.load('particles-js','libs/particles_js/particles_conf.json');
    getIdiomas();
});

function getIdiomas(){


    datos = {
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
function ajax(datos){
    $.ajax(datos);
}

