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

form.addEventListener("submit", function(event) {
  if(form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
  }
  form.classList.add("was-validated");
});

//confirm password
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm-password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
};

//slider, dude I know this is a disaster, I need more time for this
var profiles =[];

var people = document.querySelectorAll(".profile1, .profile2, .profile3")
var btn = document.querySelectorAll("button");
var counter = 1;

btn.addEventListener("click", function(){
  
});
