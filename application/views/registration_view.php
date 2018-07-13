<h1>Complete registration</h1>

<div id="reg-div" class="container">
    <form action="<?php print HTTP; ?>registration/submit" method="post">
        <div class="form-group row my-row">
            <label class="my-col col-lg-3" for="">Photo</label>
            <input type="file" name="photo" class="form-control-file my-col col-lg-9" id="exampleFormControlFile1">
        </div>

        <div class="form-group row my-row">
            <label class="my-col col-lg-3" for="">Country</label>
            <select name="country" class="form-control my-col col-lg-9">
                <option value="default-select">Default select</option>
            </select>
        </div>

        <div class="form-group row my-row">
            <label class="my-col col-lg-3" for="">City</label>
            <select name="city" class="form-control my-col col-lg-9">
                <option value="default-select">Default select</option>
            </select>
        </div>
        <!-- should we make it until 90 with js? -->
        <div class="form-group row my-row">
            <label class="my-col col-lg-3" for="exampleFormControlSelect1">Age</label>
            <select name="age" class="form-control my-col col-lg-9" id="exampleFormControlSelect1">
                <option value="18">18</option>
            </select>
        </div>

        <div class="form-group row my-row">
            <label class="my-col col-lg-3" for="">Education</label>
            <select name="education" class="form-control my-col col-lg-9">
                <option value="secondary-education">secondary education</option>
                <option value="incomplete-higher-education">incomplete higher education</option>
                <option value="bachelor-degree">bachelor's degree</option>
                <option value="master-degree">master's degree</option>
                <option value="phd">PhD</option>
            </select>
        </div>

        <div class="form-group row my-row">
            <label class="my-col col-lg-3" for="exampleFormControlTextarea1">Hobbies</label>
            <textarea name="hobbies" class="form-control my-col col-lg-9" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>

        <div class="form-group row my-row">
            <label class="my-col col-lg-3" for="">Languages</label>
            <select name="languages" class="form-control my-col col-lg-9">
                <?php

                foreach($data['spoken_languages'] as $lang) {
                    echo "<option value=" . strtolower(trim($lang)) . ">" . $lang . "</option>";
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
        <input type="submit" value="Submit">
    </form>
</div>
