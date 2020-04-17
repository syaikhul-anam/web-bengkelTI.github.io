$(function() {
    $("#nav-about").on('click', function(e){
        e.preventDefault();
        $('html, body').animate({ scrollTop: 1000},800);
    });
});