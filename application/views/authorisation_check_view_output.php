<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
	button {background-color: #4CAF50;} /* Green */
	button {border-radius: 10px;}
	button {color: white;
    padding: 10px 25px;
    text-align: center;}

	
		h1, h2 { text-align: center; font-family: Calibri; }
		table.mytable {border-collapse: collapse;}
		
		table.mytable td, th {border: 1px solid grey; padding: 5px 15px 2px 7px;}
		th {background-color: #f2e4d5;}	
body {
			background-image: url("http://wallpaperpulse.com/img/5190380.jpg");
    background-color: #white;
			table.mytable {border-collapse: collapse;}
		table.mytable td, th {border: 1px solid black; padding: 5px 15px 2px 7px;}
		th {
    background-color: #4CAF50;
    color: white;
}
		}		
	</style>
</head>
<body>


<div class="container text-center">

	<h2>TABLES</h2>
	<div align='center'>
	<form action="<?php echo site_url('main/check_authorisation')?>"
	method="post">
	<?php 
		$check = $this->input->post('userinput');


		$tmpl = array ('table_open' => '<table class="mytable">');
		$this->table->set_template($tmpl);

		$this->db->query('drop table if exists temp');
		$this->db->query('create temporary table temp as (SELECT authorisation.cardId AS "Card Id",authorisation.matchNo AS "Match No", venue.venue_name AS "Venue Name", venue.stadium_name AS "Stadium Name"
														FROM authorisation
														INNER JOIN game ON authorisation.matchNo = game.match_no
														INNER JOIN venue ON game.stadium = venue.venue_name
														WHERE authorisation.cardId = "'.$check.'" )');
		$query = $this->db->query('select * from temp;');
		$num_rows = $query->num_rows; //$num_rows = mysql_num_rows($sq);
		
		if ($num_rows > 0) {
			echo "Authorised";
		
		echo $this->table->generate($query);
		}
		else{
		echo "Not Authorised\n";
		}
		?>
	<button type="submit">Go Back</button>
	</form>
	</div>
</div>
</body>
</html>
