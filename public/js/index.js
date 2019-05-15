$(document).ready(function(){

    particlesJS.load('particles-js','libs/particles_js/particles_conf.json');
    getIdiomas();
});

function getIdiomas(){

    $.ajax({
        type: "get",
        url: "../api/idioma",
        dataType: 'json',
        async: true,
        success: function(json){
            idiomas = JSON.stringify(json);
            idiomasOBJ = $.parseJSON(idiomas);
           alert(idiomas);
        }
    });
}

