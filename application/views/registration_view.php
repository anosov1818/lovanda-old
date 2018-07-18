

<div id="reg-wrapper" class="container">

<h1>Registration</h1>

<div class="form-group row my-row">
    <label class="my-col col-lg-3" for="">Photo</label>
    <input type="file" class="form-control-file my-col col-lg-9" id="exampleFormControlFile1">
</div>

<div class="form-group row my-row">
    <label class="my-col col-lg-3" for="">Country</label>
            <select class="form-control my-col col-lg-9">
              <option>Default select</option>
            </select>
</div>

<div class="form-group row my-row">
    <label class="my-col col-lg-3" for="">City</label>
            <select class="form-control my-col col-lg-9">
              <option>Default select</option>
            </select>
</div>
<!-- should we make it until 90 with js? -->
<div class="form-group row my-row">
  <label class="my-col col-lg-3" for="exampleFormControlSelect1">Age</label>
  <select class="form-control my-col col-lg-9" id="exampleFormControlSelect1">
    <option>18</option>
  </select>
</div>

<div class="form-group row my-row">
    <label class="my-col col-lg-3" for="">Education</label>
            <select class="form-control my-col col-lg-9">
              <option>secondary education</option>
              <option>incomplete higher education</option>
              <option>bachelor's degree</option>
              <option>master's degree</option>
              <option>PhD</option>
            </select>
  </div>

<div class="form-group row my-row">
    <label class="my-col col-lg-3" for="exampleFormControlTextarea1">Hobbies</label>
    <textarea class="form-control my-col col-lg-9" id="exampleFormControlTextarea1" rows="4"></textarea>
</div>

<div class="form-group row my-row">
  <label class="my-col col-lg-3" for="">Languages</label>
  <select class="form-control my-col col-lg-9">
      <?php

      foreach($data as $row) {
          echo '<option>' . $row . '</option>';
      }

      ?>
  </select>
</div>



<div class="form-group row my-row">
    <label class="my-col col-lg-3" for="">Marital Status</label>
            <select class="form-control my-col col-lg-9">
              <option>not married</option>
              <option>divorced</option>
              <option>widower/widow</option>
              <option>other</option>
            </select>
</div>

<div class="form-group row my-row">
    <label class="my-col col-lg-3" for="">Smoking</label>
    <select class="form-control my-col col-lg-9">
      <option>non-smoker</option>
      <option>sometimes</option>
      <option>several times a week</option>
      <option>everyday</option>
      <option>I've quit smoking</option>
    </select>
</div>

<div class="form-group row my-row">
    <label class="my-col col-lg-3" for="">Alcohol</label>
    <select class="form-control my-col col-lg-9">
      <option>never</option>
      <option>once or twice a year</option>
      <option>once or twice a month</option>
      <option>once a week</option>
      <option>several times a week</option>
      <option>everyday</option>
      <option>I only drink beer</option>
      <option>I'm trying to quit</option>
      <option>I've quit drinking</option>
    </select>
</div>


</div>
