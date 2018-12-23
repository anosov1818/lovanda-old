//drop down form
$( "#signup-form-button" ).on("click", function() {
    $(this).css({
        opacity:0,
        margin:0
    });
    $( "#signup-form").fadeIn();
});

//

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
  if (document.getElementById('password').value == document.getElementById('confirm-password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
};

//Mobile responsive
var instance = M.Sidenav.getInstance(elem);

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  instance.open();
  instance.close();
  instance.destroy();
