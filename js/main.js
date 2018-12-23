//drop down form
$( "#signup-form-button" ).on("click", function() {
    $(this).css({
        opacity:0,
        margin:0
    });
    $( "#signup-form").fadeIn();
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

// /////////////////////////////////////////////////////////////////////////
// CAROUSEL OBJECT
function Carousel(containerID) {
    this.container = document.getElementById(containerID) || document.body;
    this.slides = this.container.querySelectorAll('.carousel');
    this.total = this.slides.length - 1;
    this.current = 0;

    // start on slide 1
    this.slide(this.current);
}
// NEXT
Carousel.prototype.like = function (interval) {
    (this.current === this.total) ? this.current = 0 : this.current += 1;

    this.stop();
    this.slide(this.current);

    if(typeof interval === 'number' && (interval % 1) === 0) {
        var context = this;
        this.run = setTimeout(function() {
            context.next(interval);
        }, interval);
    }
};
// PREVIOUS
Carousel.prototype.dislike = function (interval) {
    (this.current === this.total) ? this.current = 0 : this.current += 1;

    this.stop();
    this.slide(this.current);

    if(typeof interval === 'number' && (interval % 1) === 0) {
        var context = this;
        this.run = setTimeout(function() {
            context.next(interval);
        }, interval);
    }
};
// STOP PLAYING
Carousel.prototype.stop = function () {
    clearTimeout(this.run);
};
// SELECT SLIDE
Carousel.prototype.slide = function (index) {
    if (index >= 0 && index <= this.total) {
        this.stop();
        for (var s = 0; s <= this.total; s++) {
            if (s === index) {
                this.slides[s].style.display = "inline-block";
            } else {
                this.slides[s].style.display = 'none';
            }
        }
    } else {
        alert("Index " + index + " doesn't exist. Available : 0 - " + this.total);
    }
};
