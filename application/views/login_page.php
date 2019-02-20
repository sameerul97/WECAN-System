<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WECAN</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style>
	body, div, h1, form, fieldset, input, textarea {
		margin: 0; padding: 0; border: 0; outline: none;
	}
	html {
		height: 100%;
	}
	body {
		background: lightgrey !important;
		background: -moz-linear-gradient(top, #FDFEFE 0%, ##FDFEFE 100%); /* firefox */
	}
	#contact {
		width: 500px; margin: 60px auto; padding: 60px 30px;
		background: #FDFEFE; border: 1px solid #e1e1e1;
		-moz-box-shadow: 0px 0px 8px #FDFEFE;
		-webkit-box-shadow: 0px 0px 8px #FDFEFE;
	}
</style>
</head>
<body>

	<div class="form-group" id="contact">
		<h4 class="text-center">Women's Euro Championship Access Network - WECAN</h4>
		<form action="<?php echo site_url('main/check_username')?>" method="post">
			<fieldset>
				<label for="name">Username:</label>
				<input class="form-control" type="text" name="userinput" placeholder="Enter your username" />
				<label for="email">Password:</label>
				<input class="form-control" type="password" name="password" placeholder="Enter your password " />
				<fieldset align="right">
				<button type="submit" class=" m-1 btn btn-primary">LogIn</button>
				</fieldset>
		</form>
	</div>
</body>
</html>
	