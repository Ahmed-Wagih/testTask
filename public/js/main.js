$(document).ready(function(){

    $(".calender").on('click', function(){
        $(".calender").addClass("active");
        $(".week").removeClass("active");
    });
    $(".week").on('click', function(){
        $(".week").addClass("active");
        $(".calender").removeClass("active");
    });

    // Open appointment page

    $(".book-btn").on('click', function(){
        var doctorId = $(this).data("doctor");
        console.log(doctorId);
        console.log("#appointment"+doctorId);
        $(".doctor-appointment").removeClass("active-app");
        $("#appointment"+doctorId).addClass("active-app");
        $(".overlay").css('display','block')

    });
    $(".overlay").on('click', function(){
        $(".doctor-appointment").removeClass("active-app");
        $(".overlay").css('display','none')
    });
  });