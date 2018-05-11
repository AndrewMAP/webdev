<!DOCTYPE html>
<?php include("password_protect.php"); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head co ntent must come *after* these tags -->
    <title>STK Star Website</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/indexMain.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/star.css">
	<link href="img/logostar-120.jpg" rel="apple-touch-icon" />
	<link href="img/logostar-76.jpg" rel="apple-touch-icon" sizes="76x76" />
	<link href="img/logostar-120.jpg" rel="apple-touch-icon" sizes="120x120" />
	<link href="img/logostar-152.jpg" rel="apple-touch-icon" sizes="152x152" />
	<link href="img/logostar-180.jpg" rel="apple-touch-icon" sizes="180x180" />
	<link href="img/logostar-192.jpg" rel="icon" sizes="192x192" />
	<link href="img/logostar-128.jpg" rel="icon" sizes="128x128" />

  </head>
  <body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type ="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sry-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">S.T.A.R.</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="index.php">Daily Reports</a>
					</li>
					<li>
						<a href="trader.php">Trader Schedule</a>
					</li>
					<li>
						<a href="logs.php">Logs</a>
					</li>
					<li>
						<a href="http://newstkcapital.tempsite.ws/star/dailyglobal_quotes.htm">Brazil & Global Quotes</a>
					</li>
					<li>
						<a href="http://newstkcapital.tempsite.ws/star/update_Brazil.htm">Brazil PL</a>
					</li>
					<li>
						<a href="brokers.php">Brokers</a>
					</li>
					<li>
						<a href="presentations.php">Presentations</a>
					</li>
          <li>
						<a href="optimal.php">Optimal Positions</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!------------------- MAIN ---------------------->
	<div class="container">
		<div class="starter-template">
			<h1> &nbsp </h1>
		</div>
		<div class="list-group">
		  <button type="button" class="list-group-item"><a href="../pdf/Performance Fundos.pdf">Funds Perfomance</a></button>
		  <li class="list-group-item"><strong><h4>Brazil Funds</h4></strong></li>
		  <button type="button" class="list-group-item"><a href="../pdf/Consolidado Brasil.pdf">Brazil Funds</a></button>
		  <button type="button" class="list-group-item"><a href="../pdf/A list Brazil.pdf">A List Brazil</a></button>
		  <li class="list-group-item"><strong><h4>STK Long Biased</h4></strong></li>
		  <button type="button" class="list-group-item"><a href="../pdf/STK Long Biased Master FIA Detalhado_Longs.pdf">STK Long Biased Long Book Detalhado</a></button>
		  <button type="button" class="list-group-item"><a href="../pdf/STK Long Biased Master FIA Detalhado_Shorts.pdf">STK Long Biased Short Book Detalhado</a></button>
      <button type="button" class="list-group-item"><a href="../pdf/STK Long Biased Master FIA Optimal Long Book.pdf">STK Long Biased Optimal Positions</a></button>
		  <button type="button" class="list-group-item"><a href="../pdf/STK Long Biased Master FIA Contribution.pdf">STK Long Biased Attribution</a></button>
		  <button type="button" class="list-group-item"><a href="../pdf/Options_STK Long Biased Master FIA.pdf">STK Long Biased Options Book</a></button>
		  <li class="list-group-item"><strong><h4>STK Long Only</h4></strong></li>
		  <button type="button" class="list-group-item"><a href="../pdf/STK Long Only Institucional FIA Detalhado_Longs.pdf">STK Long Only Long Book Detalhado</a></button>
		  <button type="button" class="list-group-item"><a href="../pdf/STK Long Only Institucional FIA Optimal Long Book.pdf">STK Long Only Optimal Positions</a></button>
		  <button type="button" class="list-group-item"><a href="../pdf/STK Long Only Institucional FIA Results Optimal.pdf">STK Long Only Optimal Results</a></button>
		</div>

	<!--------- END OF MAIN ------------------->
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
