$(document).ready(function() {
    $('#change').click(function() {
        $('#para').css('background-color', 'yellow').text("Présentation terminée");
    });
});
$("#fadeOut").click(function () {
    $("#div1").fadeOut();
    $("#div2").fadeOut();
    $("#div3").fadeOut();
});
<button id="show">Img</button>
$("#flip1").click(function () {
    $("#img-hover").slideDown("slow");
});

