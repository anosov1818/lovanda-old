<h1>Страница авторизации/Authorization</h1>

<div id="authorization" class="row my-row">
	<form action="" method="post">
		<div class="form-group row">
	    <label for="inputEmail" class="col-sm-3 col-form-label">Login</label>
	    <div class="col-sm-9">
	      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
	    </div>
	  </div>
		<div class="form-group row">
    	<label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
    	<div class="col-sm-9">
      	<input type="password" class="form-control" id="inputPassword" placeholder="Password">
    	</div>
  	</div>
	</form>
</div>


<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Authorization was successful</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Login and / or password are entered incorrectly.</p>
<?php } ?>
