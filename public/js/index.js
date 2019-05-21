$(document).ready(function(){

    particlesJS.load('particles-js','libs/particles_js/particles_conf.json');
    getIdiomas();
    getLenguajes();
    getProyectos();
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
                $('.idiomas').append('<div class="col s12 m4"><div class="card card-background white-text"><div class="card-content"><span class="card-title center-align">'+ idioma.nom +'</span> <p class="center-align">'+ idioma.nivell +'</p></div></div></div>')
                // $('.idiomas').append('<tr id=' + idioma.id + '><td>' + idioma.nom + '</td><td>' + idioma.nivell + '</td></tr>')
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
function getProyectos(){

    var datos = {
        type: "get",
        url: "./api/proyecto",
        dataType: 'json',
        async: true,
        success: function(json){
            proyectos = JSON.stringify(json);
            proyectosOBJ = $.parseJSON(proyectos);
            console.log(proyectos);
            proyectosOBJ['data'].forEach(function(proyecto, index){
                $('.proyectos').append('<div class="flexbox-slide">' +
                '<img src="'+ proyecto.imatge +'" alt="Slide Image">' +
                '<div class="text-block"><h3>'+ proyecto.nom + '</h3><div class="text"><p>'+  proyecto.descripcio + '</p><a class="btn-floating red darken-3" role="button" href="'+ proyecto.url +'"><i class="material-icons center">link</i></a></div></div></div>')
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

