$(document).ready(function () {
    // $("p").hover(() => {
    //     $(this).css("background-color", "yellow");
    // });
    $('#sign-in').click(function () {
        $('#loginmodal').modal()
        $('#nv-pill .nav-item:last-child .nav-link').removeClass('active')
        $('.tab-content #create').removeClass('active show')
        $('#nv-pill .nav-item:first-child .nav-link').addClass('active')
        $('.tab-content #login').addClass('active show')
    });
    $('#sign-up').click(function () {
        $('#loginmodal').modal()
        $('#nv-pill .nav-item:first-child .nav-link').removeClass('active')
        $('.tab-content #login').removeClass('active show')
        $('#nv-pill .nav-item:last-child .nav-link').addClass('active')
        $('.tab-content #create').addClass('active show')
    });
    // $('#search-bar').focus(function() {
    //     $('#search-bar').css('width', '80%').fadeOut(2000), () => {
    //         $('#search-bar').css('display', 'block')
    //     };
    // });
    // $("a").mouseenter(function() {
    //     $(this).siblings().css('display', 'block')
    // });
    // $("a").mouseleave(function() {
    //     $(this).siblings().css('display', 'none')
    // });
    // $("div").hover(function () {
    //     $(this).siblings().css('border-bottom', '2px black solid')
    // })
});