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

</head>
<body>
<div class="container text-center">

<h1>Entries </h1>
<div align="center">
    <div>
		<button type="submit"onclick = "location.href='<?php echo site_url('main/add_entries')?>'">Add Entries</button>
		<button type="submit"onclick = "location.href='<?php echo site_url('main/attempted_entries')?>'">Attempted Entries</button>
		<button type="submit"onclick = "location.href='<?php echo site_url('main/failed_entries')?>'">Failed Entries </button>
		<button type="submit"onclick = "location.href='<?php echo site_url('main/successful_entries')?>'">Successful Entries</button>
    </div>
	</div>
	</div>
</body>
</html>
