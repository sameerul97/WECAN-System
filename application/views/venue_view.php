<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
    html {
	  background: url("http://wallpaperpulse.com/img/5190380.jpg") no-repeat center center fixed;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
}	</style>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>

<h1>Venues</h1>
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
