<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
 
  <style>
#showcase{
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
    background-image: linear-gradient(to top, #37ecba 0%, #72afd3 100%) ;
  background-size:cover;
  background-position:center;
  height:100vh;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  text-align:center;
  padding:0 20px;
}
footer{
  background-size: cover;
    /* background-image: linear-gradient(to top, #37ecba 0%, #72afd3 100%) ; */
    background-image: linear-gradient(to top, #c1dfc4 0%, #deecdd 100%);
}
#showcase h1{

}

#showcase p{
  font-size:20px;
}

#showcase .button{
  font-size:18px;
  text-decoration:none;
  color:#926239;
  border:#926239 1px solid;
  padding:10px 20px;
  border-radius:10px;
  margin-top:20px;
}

#showcase .button:hover{
  background:#926239;
  color:#fff;
}


</style>
</head>
<body>
<div id="showcase">
<h1 class="display-4">WECAN System</h1>
<p>Online Card Management System</p>
<a href="#" class="button">Read More</a>
</div>

<div class="container">
  <h3 class="text-center m-3 ">About WECAN</h3>
  <div class="border border-secondary rounded p-3 m-2">
  <p>
  The UEFA European Women's Championship, also called the UEFA Women's Euro and unofficially the "European Cup", held every fourth year, is the main competition in women's association football between national teams of the UEFA Confederation. The competition is the women's equivalent of the UEFA European Championship.
  </p>
  <p>
    The predecessor tournament to the UEFA Women's Championship began in the early 1980s, under the name UEFA European Competition for Representative Women's Teams. With increasing popularity of women's football, the competition was given European Championship status by UEFA around 1990. Only the 1991 and 1995 editions have been used as European qualifiers for a FIFA Women's World Cup; starting in 1999, the group system used in men's qualifiers was also used for women's national teams.
  Eight UEFA Women's Championships have taken place, preceded by 3 editions of the earlier European Competition for Representative Women's Teams. The most recent holding of the competition was the 2013 Women's Euro hosted by Sweden in July 2013.
  </p>
</div>


  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://www.uefa.com/MultimediaFiles/Photo/competitions/Comp_Matches/01/97/74/74/1977474_w2.jpg" height="400" width="650" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://e0.365dm.com/16/11/16-9/20/skysports-germany-euro-uefa-womens_3826816.jpg?20161108163825" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  <h1 class="text-center">Winners</h1>


<table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Year</th>
      <th scope="col">Country</th>
    </tr>
  </thead>
  <tbody>
  <tr><th scope="row" >1<td>2011/13</td><td>GERMANY</td></td></tr>
    <tr><th scope="row" >2<td>2006/09</td><td>GERMANY</td></td></tr>
    <tr><th scope="row" >3<td>2003/05</td><td>GERMANY</td></td></tr>
    <tr><th scope="row" >4<td>1999/01</td><td>GERMANY</td></td></tr>    
    <tr><th scope="row" >5<td>1995/97</td><td>GERMANY</td></td></tr>
    <tr><th scope="row" >6<td>1993/95</td><td>GERMANY</td></td></tr>
    <tr><th scope="row" >7<td>1991/93</td><td>NORWAY</td></td></tr>
    <tr><th scope="row" >8<td>1989/91</td><td>GERMANY</td></td></tr>
    <tr><th scope="row" >9<td>1987/89</td><td>GERMANY</td></td></tr>
    <tr><th scope="row" >10<td>1984/87</td><td>NORWAY</td></td></tr>
    <tr><th scope="row" >11<td>1982/84</td><td>SWEDEN</td></th></tr>
  </tbody>
</table>
</div>



<!-- Footer -->
<footer class="page-footer font-small blue pt-4 ">

    <!-- Footer Links -->
    <div class="container -fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">WECAN</h5>
          
<p class="p-centre">This system allows staff at International Widgets to manage stocked items, customers and orders.</p>
<p class="p-centre">Click one of the navigation links to begin.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">
            <a class="nav-link" href='<?php echo site_url('main/home')?>'>Home <span class="sr-only">(current)</span></a>

            </h5>

            <ul class="list-unstyled">
		<li><a class="nav-link" href='<?php echo site_url('main/competitors')?>'>Competitor</a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/cards')?>'>Cards</a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/teams')?>'>Teams</a></li>
    <li><a class="nav-link" href='<?php echo site_url('main/venue')?>'>Venue</a></li>

            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">
            <a class="nav-link" href='<?php echo site_url('main/help')?>'>Help</a>
            </h5>

            <ul class="list-unstyled">
		<li><a class="nav-link" href='<?php echo site_url('main/game')?>'>Match</a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/check_authorisation')?>'>Check Authorisation</a></li>
		<li><a class="nav-link" href='<?php echo site_url('main/all_main_entries')?>'>Entries</a></li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2017 Copyright:
      <a href="#"> WECAN</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
</html>
