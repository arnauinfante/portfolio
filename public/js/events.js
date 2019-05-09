
  $(document).ready(function(){

    $('.sidenav').sidenav({
        draggable: true
    });
    $('.parallax').parallax();

    $('.modal').modal();

    $('.dropdown-trigger').dropdown({
        inDuration: 300,
        outDuration: 225,
        gutter: 0,
        coverTrigger: false,
        aligment: 'left',
        stopPropagation: false
    });

  });
  $(window).scroll(function(){

    var scroll = $(window).scrollTop();
    if( scroll > $('.parallax-container').height() - 24){
        $("nav").addClass('nav-scrolled');
        $("nav").removeClass('z-depth-0');
        $("#dropdownNavbar").addClass('nav-scrolled');
    }else{
        $("nav").addClass('z-depth-0');
        $("nav").removeClass('nav-scrolled');
        $("#dropdownNavbar").removeClass('nav-scrolled');
    }
});
