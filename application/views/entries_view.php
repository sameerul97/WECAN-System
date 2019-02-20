<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
				h1 { text-align: center; 	font-family: Calibri; }
				body {
		    background-image: url("http://wallpaperpulse.com/img/5190380.jpg");
    background-color: #white;}
	button {background-color: #4CAF50;} /* Green */
	button {border-radius: 10px;}
	button {color: white;
    padding: 10px 25px;
    text-align: center;}
	</style>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
<div class="container text-center">


	<h1>Entries </h1>
			<div>
			<?php echo $output; ?>
			
			<button type="submit">Go Back</button>
			</div>
			</div>
</body>
</html>
