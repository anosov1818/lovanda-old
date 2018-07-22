//drop down form
$( "#signup-form-button" ).on("click", function() {
    $(this).css({
        opacity:0,
        margin:0
    });
    $( "#form").fadeIn();
});

//singup form validation
var form = document.querySelector(".needs-validation");

form.addEventListener("submit", funtction(event){
  if(form.checkValidity() === false){
    event.preventDefault();
    event.stopPropagation();
  }
  form.classList.add("was-validated");
})
