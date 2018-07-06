
$( "#signup-form-button" ).on("click", function() {
    //$( "#form" ).css("opacity", "");
    $(this).css({
        opacity:0,
        margin:0
    });
    $( "#form").fadeIn();
});