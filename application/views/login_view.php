<h1>Authorization</h1>
<div id="authorization" class="row my-row">
	<form action="<?php print HTTP; ?>login" method="post">
		<div class="form-group row">
	        <label for="inputEmail" class="col-sm-3 col-form-label">Login</label>
	        <div class="col-sm-9">
	            <input type="email" name="login" class="form-control" id="inputEmail" placeholder="Email">
	        </div>
	    </div>
		<div class="form-group row">
    	    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
    	    <div class="col-sm-9">
      	        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
    	    </div>
  	    </div>
        <button type="submit" class="btn btn-primary">Log in</button>
	</form>
</div>


<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Authorization was successful</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Login and / or password are entered incorrectly.</p>
<?php } ?>
