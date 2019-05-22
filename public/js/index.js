$(document).ready(function(){

    particlesJS.load('particles-js','libs/particles_js/particles_conf.json');
    getIdiomas();
    getLenguajes();
    getProyectos();
    getEstudios();
    colorApi();
});


function colorApi(){
    $.ajax({
        url: 'http://www.thecolorapi.com/id?hex=00FFEE',
        success: function(respuesta) {
            // console.log(respuesta);
            color = JSON.stringify(respuesta);
            colorOBJ = $.parseJSON(color);
            console.log(colorOBJ);
        },
        error: function() {
            console.log("ERROR");
        }
    });
  };

function getIdiomas(){


   var datos = {
        type: "get",
        url: "./api/idioma",
        dataType: 'json',
        async: true,
        success: function(json){
            idiomas = JSON.stringify(json);
            idiomasOBJ = $.parseJSON(idiomas);
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

 function getEstudios(){

    var datos = {
        type: "get",
        url: "./api/estudio",
        dataType: 'json',
        async: true,
        success: function(json){
            estudios = JSON.stringify(json);
            estudiosOBJ = $.parseJSON(estudios);
            estudiosOBJ['data'].forEach(function(estudio, index){
                $('.estudios').append('<div class="col s12"><div class="card card-background white-text">' +
                    '<div class="card-content"><span class="card-title">'+ estudio.nom +'</span><p>Curso '+ estudio.curs + '</p>' +
                        '<p>'+ estudio.centre + '</p></div></div></div>')
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



