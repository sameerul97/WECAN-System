<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
	<style>
/* ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #6b6b47;
    width:70%;
    text-align:center;
	font-size:25px;


}


li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 18px 16px;
    text-decoration: none;

}

li a:hover {
    background-color: #111;
.active {
    background-color: #121211;

}}

h1{font-size:45px;
     height:100px;
     } */
	</style>
</head>
<body>


	<!-- <div><center>
		<ul id="nav">
		<li><a href='<?php echo site_url('main/home')?>'>Home</a></li>
		<li><a href='<?php echo site_url('main/competitors')?>'>Competitor</a></li>
		<li><a href='<?php echo site_url('main/cards')?>'>Cards</a></li>
		<li><a href='<?php echo site_url('main/teams')?>'>Teams</a></li>
		<li><a href='<?php echo site_url('main/venue')?>'>Venue</a></li>
		<li><a href='<?php echo site_url('main/game')?>'>Match</a></li>
		<li><a href='<?php echo site_url('main/check_authorisation')?>'>Check Authorisation</a></li>
		<li><a href='<?php echo site_url('main/all_main_entries')?>'>Entries</a></li>
		<li><a href='<?php echo site_url('main/help')?>'>Help</a></li>
		<li><a href='<?php echo site_url('main/index')?>'>Logout</a></li>
    </center></div> -->
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WECAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li><a class="nav-link" href='<?php echo site_url('main/home')?>'>Home <span class="sr-only">(current)</span></a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/competitors')?>'>Competitor</a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/cards')?>'>Cards</a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/teams')?>'>Teams</a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/venue')?>'>Venue</a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/game')?>'>Match</a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/check_authorisation')?>'>Check Authorisation</a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/all_main_entries')?>'>Entries</a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/help')?>'>Help</a></li>
		<!-- <li><a class="nav-link" href='<?php echo site_url('main/index')?>'>Logout</a></li> -->
    </ul>
  </div>
</nav>
</body>
</html>