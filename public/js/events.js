
  $(document).ready(function(){

    $('.modal').modal();

    $('.sidenav').sidenav({
        draggable: true
    });

    $('.dropdown-trigger').dropdown({
        inDuration: 300,
        outDuration: 225,
        gutter: 0,
        coverTrigger: false,
        aligment: 'left',
        stopPropagation: false
    });

         $('.indice').click(function() {
             var destino = $(this.hash);
             if (destino.length == 0) {
                destino = $('a[name="' + this.hash.substr(1) + '"]');
             }
             if (destino.length == 0) {
                destino = $('html');
             }
             $('html, body').animate({ scrollTop: destino.offset().top }, 1000);
             return false;
         });

  });
  $(window).scroll(function(){

    var scroll = $(window).scrollTop();
    if( scroll > $('#particles-js').height() - 10){
        $("nav").addClass('nav-scrolled');
        $("nav").removeClass('z-depth-0');
        $("#dropdownNavbar").addClass('nav-scrolled');
    }else{
        $("nav").addClass('z-depth-0');
        $("nav").removeClass('nav-scrolled');
        $("#dropdownNavbar").removeClass('nav-scrolled');
    }
});
