<div id="welcome">
    <h1>Welcome to Lovanda</h1>
    <p>Lovanda is a revolutionary application to find a partner online for free</p>
    <button class="signup-button" id="signup-form-button"> Sign up </button>
</div>

<div id="form" class="col-sm-12 col-md-8 p-5">
    <form action="<?php print HTTP; ?>registration" method="post" class="main-form needs-validation" novalidate>
        <div class="row my-row">
            <div class="col-lg-6 col-xs-12 my-col">
                <div class="form-group">

                    <label for="my-gender">I Am</label>
                    <select name="my-gender" class="form-control" placeholder="">
                        <option value="male">Man</option>
                        <option value="female">Woman</option>
                        <option value="wtf">Other</option>
                    </select>
                    <div class="invalid-feedback">Please select your gender.</div>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 my-col">
                <div class="form-group">
                    <label for="search-for-gender">Looking For</label>
                    <select name="search-for-gender" class="form-control"placeholder="">
                        <option value="male">Man</option>
                        <option value="female">Woman</option>
                        <option value="wtf">Other</option>
                    </select>
                    <div class="invalid-feedback">Please select gender.</div>

                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="Name">Your Name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" required>
            <div class="invalid-feedback">Please enter your name.</div>
        </div>
        <div class="form-group">
            <label for="username">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
            <div class="invalid-feedback">Please enter your email.</div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" onkeyup='check();' required>
            <div class="invalid-feedback">Please enter your password.</div>
        </div>
        <div class="form-group">
            <label for="password">Confirm Password</label>
            <input type="password" name="password" id="confirm-password" class="form-control"  onkeyup='check();' required>
            <span id='message'></span>
            <div class="invalid-feedback">Please confirm your password.</div>
        </div>
        <div id="have-account"><a href="#">Have Account?</a></div>
        <div id="terms" class="form-group">
            <div class="form-check">
                <input type="checkbox" id="accept-terms" class="form-check-input" required>
                <label for="accept-terms" class="form-check-label">
                    By registering,
                    I confirm that I am 18 years old or older.
                    I accept the terms of the
                    <a href="#">user agreement</a> and
                    <a href="#">privacy policy</a>.
                </label>

            </div>
        </div>
        <div id="signup-wraper">
            <input class="signup-button" type="submit" value="Submit">
        </div>
    </form>
</div>

<div id="info" class="row">
<div class="options col-lg-4 my-col">
    <h3>Manage Invoices Online</h3>
    <p id="firstp">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Eaque inventore saepe et eligendi reiciendis minima cumque
        necessitatibus sapiente mollitia accusantium ipsum, nulla
        repudiandae dolore voluptatibus cupiditate perspiciatis quae
        debitis nemo.
    </p>
</div>

<div class="options col-lg-4 my-col">
    <h3>Dashboards and Reports</h3>
    <p id="secondp">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Eaque inventore saepe et eligendi reiciendis minima cumque
        necessitatibus sapiente mollitia accusantium ipsum, nulla
        repudiandae dolore voluptatibus cupiditate perspiciatis quae
         debitis nemo.
    </p>
</div>

<div class="options col-lg-4 my-col">
    <h3>Invite Share and Collaborate</h3>
    <p id="thirdp">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Eaque inventore saepe et eligendi reiciendis minima cumque
        necessitatibus sapiente mollitia accusantium ipsum, nulla
        repudiandae dolore voluptatibus cupiditate perspiciatis quae
         debitis nemo.
    </p>
</div>
</div>

<!-- cd C:\xampp\htdocs\lovanda -->
<!-- js starts here  -->


<script type="text/javascript">
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
    document.getElementById('message').innerHTML = 'MATCHING';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'NOT MATCHING';
  }
};
</script>
