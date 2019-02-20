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
	
	input[type=text]:focus {
    background-color: lightblue;
}
	h1 { text-align: center;font-family: Monospace; }
		p.p-centre { text-align: center; font-family: Arial; }
		#cogs { display: block; padding-top: 20px; margin-left: auto; margin-right: auto; }		
		body {
			table.mytable {border-collapse: collapse;}
		table.mytable td, th {border: 1px solid grey; padding: 5px 15px 2px 7px;}
		th {background-color: #f2e4d5;}		
	}
		h1 { text-align: center;font-family: Monospace; }
		p.p-centre { text-align: center; font-family: Arial; }
		#cogs { display: block; padding-top: 20px; margin-left: auto; margin-right: auto; }
		body {
			background-image: url("http://wallpaperpulse.com/img/5190380.jpg");
    background-color: #white;
			table.mytable {border-collapse: collapse;}
		table.mytable td, th {border: 1px solid grey; padding: 5px 15px 2px 7px;}
		th {}
		}
		input {
	width: 260px; height: 35px; padding: 5px 20px 0px 20px; margin: 0 0 20px 0; 
	background: #5E768D;
	background: -moz-linear-gradient(top, #546A7F 0%, #5E768D 20%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#546A7F), color-stop(20%,#5E768D)); /* webkit */
	border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;
	-moz-box-shadow: 0px 1px 0px #f2f2f2;-webkit-box-shadow: 0px 1px 0px #f2f2f2;
	font-family: sans-serif; font-size: 16px; color: #f2f2f2; text-transform: uppercase; text-shadow: 0px -1px 0px #334f71; 
}
	input::-webkit-input-placeholder  {
    	color: #a1b2c3; text-shadow: 0px -1px 0px #38506b;  
	}
	input:-moz-placeholder {
	    color: #a1b2c3; text-shadow: 0px -1px 0px #38506b; 
	}

textarea {
	width: 260px; height: 170px; padding: 12px 20px 0px 20px; margin: 0 0 20px 0; 
	background: #A6ACAF ;
	background: -moz-linear-gradient(top, #A6ACAF 0%, #A6ACAF 20%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#546A7F), color-stop(20%,#5E768D)); /* webkit */
	border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;
	-moz-box-shadow: 0px 1px 0px #f2f2f2;-webkit-box-shadow: 0px 1px 0px #f2f2f2;
	font-family: sans-serif; font-size: 16px; color: #f2f2f2; text-transform: uppercase; text-shadow: 0px -1px 0px #334f71; 
}
	textarea::-webkit-input-placeholder  {
    	color: #a1b2c3; text-shadow: 0px -1px 0px #38506b;  
	}
	textarea:-moz-placeholder {
	    color: #a1b2c3; text-shadow: 0px -1px 0px #38506b; 
	}
	
input:focus, textarea:focus {
	background: #728eaa;
	background: -moz-linear-gradient(top, #668099 0%, #728eaa 20%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#668099), color-stop(20%,#728eaa)); /* webkit */
}

input[type=submit] {
	width: 185px; height: 52px; float: right; padding: 10px 15px; margin: 0 15px 0 0;
	-moz-box-shadow: 0px 0px 5px #999;-webkit-box-shadow: 0px 0px 5px #999;
	border: 1px solid #556f8c;
	background: -moz-linear-gradient(top, #718DA9 0%, #415D79 100%); /* firefox */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#718DA9), color-stop(100%,#415D79)); /* webkit */
	cursor: pointer;
}
	</style>
</head>

<div class="container text-center">


	<h1>Check Authorisation</h1>
	<body>
	<div align='center'>
	<form action="<?php echo site_url('main/check_authorisation_output2')?>" method="post">
	<input type="text" name="userinput" placeholder="Enter Card ID" />
	<button type="submit">Check Authorisation</button>
	</form>


	</div>
	</div>
</body>
</html>
