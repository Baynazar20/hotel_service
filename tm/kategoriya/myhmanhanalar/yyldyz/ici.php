<?php
	$mysql_con=mysqli_connect("localhost","root","","myhmanahyzmat");
	$query=mysqli_query($mysql_con,"SELECT * from otel where name='Ýyldyz'");
	$info=mysqli_fetch_array($query);

	$s='';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../../../images/TürkmenTagam.png" rel="shortcut icon" type="image/x-icon" />
<title>MyhmanaHyzmat - Myhamanhana - YYLDYZ</title>

<link rel="stylesheet" href="../../../../css/hyzmat.css">
</head>
<body>

<!--  Nav Begin  -->
<nav class="navbar navbar-default">
	<div class="container-fluid"> 
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="index.php" style="font-family: Blackadder ITC; font-size: 30px"><b style="text-decoration:underline">MyhmanaHyzmat</b></a> 
		</div>
		 
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Biz bilen habarlaşmak</a> </li>
				<li class="dropdown"> 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Ýerleşýän ýeriň<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Aşgabat</a> </li>
						<li><a href="#">Büzmeýin</a> </li>
						<li><a href="#">Änew</a> </li>
					</ul>
				</li>
				<li class="dropdown"> 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Dil<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Türkmen dil</a> </li>
						<li><a href="#">Rus dil</a> </li>
						<li><a href="#">Inlis dil</a> </li>
					</ul>
				</li>
			</ul>
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Gözleg">
				</div>
				<button type="submit" class="btn btn-default">Gözlemek</button>
			</form>
		</div>
	</div>
</nav>
<!--  Nav Finish  -->
<!--  HEADER Begin  -->
<style>
.jumbotron .container .row img{
	width: 25px;
	height: 25px;
}	
.maglumat{
	background-color: rgba(255, 255, 255, .6);
	border-radius: 20px;
}
.jumbotron .container #tel{
	background-color: #8bc34a;
}

.jumbotron .container #yer{
	background-color: #03a9f4;
}
.b-popup{
    width:100%;
    min-height:100%;
    background-color: rgba(0,0,0,0.5);
    overflow:hidden;
    position:fixed;
    top:0px;
}
.b-popup .b-popup-content{
    width: 500px; 
		height: 500px;
		margin: 5% auto;
    background-color: #c5c5c5;
    border-radius:5px;
    box-shadow: 0px 0px 10px #000;
}
</style>
		<header>
			<div class="jumbotron" style="background-image: url(../../../../images/room/yyldyz/1/0.jpg); background-position: center; background-size: cover; background-repeat: no-repeat">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 maglumat">
							<h1 class="text-center">Standard Superior</h1>
							<p class="text-center"><img src="../../../../images/icons/baha.ico"> Baha: 700 manat / 1 gije</p>
							<p class="text-center"><img src="../../../../images/icons/bed.svg"> iki adamlyk krowat</p>
							<p class="text-center"><img src="../../../../images/icons/profile.svg"> 2</p>
							<p class="text-center"><img src="../../../../images/icons/wifi.ico"> WiFI</p>
							<p class="text-center"><img src="../../../../images/icons/esas.ico"> Ertirlik</p>
							<p class="text-center"><img src="../../../../images/icons/room-service.svg"> Otaglary hyzmat ediş 24/7</p>
							<p class="text-center"><img src="../../../../images/icons/safe.svg"> Seýf</p>
							<p class="text-center"><img src="../../../../images/icons/area.svg"> 88 m<sup>2</sup></p>
						</div>
					</div>
				</div>
			</div>
		</header>
<!--  HEADER Finish  -->
<!--  Restoranlar Begin -->
<style>
	.b-popup{
    width:100%;
    min-height:100%;
    background-color: rgba(0,0,0,0.5);
    overflow:hidden;
    position:fixed;
    top:0px;
}
.b-popup .b-popup-content{
    width: 500px; 
		height: 500px;
		margin: 5% auto;
    background-color: #c5c5c5;
    border-radius:5px;
    box-shadow: 0px 0px 10px #000;
}
.surat img{
	width: 30%;
	margin: 10px;
}
.hyzmatlar{
	width: 100px;
	margin-right: 100px;
}	
.hyzmatlar img{
	width: 100px;
}
.hyzmatlar .ik{
	font-size: 20px;
	text-align: center;
}
</style>
<section>
	<div class="row">
		<div class="col-lg-12 page-header text-center">
			<h2><b>Standard Superior</b></h2>
		</div>
	</div>
	<div class="container">
		<h2 class="text-center">Suratlar</h2>
		<div class="row">
			<div class="surat"><img src="../../../../images/room/yyldyz/1/1.jpg" alt=""><img src="../../../../images/room/yyldyz/1/2.jpg" alt=""><img src="../../../../images/room/yyldyz/1/3.jpg" alt=""></div>
			<div class="surat"><img src="../../../../images/room/yyldyz/1/4.jpg" alt=""><img src="../../../../images/room/yyldyz/1/5.jpg" alt=""><img src="../../../../images/room/yyldyz/1/6.jpg" alt=""></div>
		</div>
		<p class="text-center"><a href="javascript:PopUpShow1()"><button style="width: 50%; font-size: 30px; margin: 30px;">Ýer bronlamak</button></a></p>
	</div>
	<div class="b-popup" id="popup1" style="z-index: 1000000000000; ">
		<div class="b-popup-content">
			<h1 align="center"><b>Maglumatlary giriziň</b></h1>
			<h2 style="margin-left: 20px;">Myhmanhana barjak günüňiz:</h2>
			<input type="date" placeholder="Myhmanhana barjak günüňiz" style="margin-left: 20px; width: 460px; border-radius: 5px">
			<h2 style="margin-left: 20px;">Myhmanhanadan gaýtjak günüňiz:</h2>
			<input type="date" placeholder="Myhmanhanadan gaýtjak günüňiz" style="margin-left: 20px; width: 460px; border-radius: 5px">
			<h1 align="center"><b>Töleg:</b></h1>
			<h2 style="margin-left: 20px;">Töleg kartynyzyň nomerini giriziň:</h2>
			<input type="tel" placeholder="Töleg kartynyzyň nomerini giriziň" style="margin-left: 20px; width: 460px; border-radius: 5px">
			<p class="text-center"><button style="margin: 10px"><a href="javascript:PopUpHide1(); alert('Siziň töleginiň geçdi.')">Tölemek</a></button>
			<button style="margin: 10px"><a href="javascript:PopUpHide1()">Goý bolsun etmek</a></button></p>
		</div>
	</div>
</section>
<!--  Restoranlar Finish -->

<div class="well"> </div>

<!-- FOOTER -->

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Baynazar. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- / FOOTER --> 
</body>
</html>
<script src="../../../../js/Jquery3.4.1.min.js"></script>
<script src="../../../../js/bootstrap.js"></script>
<script src="../../../../js/my.js"></script>
<script src="../../../../js/jquery-2.0.2.min.js"></script>
		