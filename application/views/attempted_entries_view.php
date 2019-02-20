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
			table.mytable {border-collapse: collapse;}
		table.mytable td, th {border: 1px solid grey; padding: 5px 15px 2px 7px;}
		th {background-color: #f2e4d5;}	
	</style>

</head>
<body>
<div class="container text-center">

	<h1> Attempted Entries </h1>
	<div align="center">
	<?php 
		$tmpl = array ('table_open' => '<table class="mytable">');
		$this->table->set_template($tmpl);

		$this->db->query('drop table if exists temp');
		$this->db->query('create temporary table temp as (SELECT * FROM logs)');
		$query = $this->db->query('select * from temp;');
		$num_rows = $query->num_rows; //$num_rows = mysql_num_rows($sq);
		echo $this->table->generate($query);

		?>
		</div>
		</div>
</body>
</html>
