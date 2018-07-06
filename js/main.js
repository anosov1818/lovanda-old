$( "#form" ).css("dispay", "block");

$( "#signup-form-button" ).on("click", function() {
    //$( "#form" ).css("opacity", "");
    $( "#form" ).slideToggle(1000, function(){
        //$().css("opacity", "0");
    });
});