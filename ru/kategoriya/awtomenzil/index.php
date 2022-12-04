<?php
	
	$s='';

	function ab($k)
	{
		$s='';
		for ($i=0; $i<$k; $i++)
		{
			$s=$s.('<img src="../../../images/icons/1.ico">'); 
		}
		return ($s);
	}
	$search="";
	if(isset($_GET["search"])){
		$search=$_GET["search"];
	}

	$mysql_con=mysqli_connect("localhost","root","","myhmanahyzmat");
	$query=mysqli_query($mysql_con,"SELECT id, name, nomer, yerlesyan_yeri, img, abray, menu from otel WHERE name like '%".$search."%'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../../images/TürkmenTagam.png" rel="shortcut icon" type="image/x-icon" />
<title>MyhmanaHyzmat - Awtominzil</title>

<link rel="stylesheet" href="../../../css/hyzmat.css">
<link rel="stylesheet" href="../../../css/hyz_my.css">
<link rel="stylesheet" href="../../../css/menu_my.css">
</head>
<body>

<!--  Nav Begin  -->
<nav class="navbar navbar-default">
	<div class="container-fluid"> 
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="../../" style="font-family: Blackadder ITC; font-size: 30px"><b style="text-decoration:underline">MyhmanaHyzmat</b></a> 
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dil">
					<a href="" style="padding: 0px; margin: 10px 5px;"><img src="../../../images/tm.png" style="width: 40px; height: 30px;"></a>
				</li>
				<li class="dropdown dil">
					<a href="../../../../../ru/kategoriya/TürkmenTagam/kategoriya/restoran/" style="padding: 0px; margin: 10px 5px;"><img src="../../../images/ru.png" style="width: 40px; height: 30px;"></a>
				</li>
				<li class="dropdown dil">
					<a href="../../../../../en/kategoriya/TürkmenTagam/kategoriya/restoran/" style="padding: 0px; margin: 10px 5px;"><img src="../../../images/en.png" style="width: 40px; height: 30px;"></a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!--  Nav Finish  -->
<!--  HEADER Begin  -->
<header>
  <div class="jumbotron" style="background-image: url(../../../images/awtomenzil/0.jpg); background-size: cover; background-position: center">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-fon">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <h1 class="text-center">Halkara awtomenzil</h1>
         	<p class="text-center"><img src="../../../images/icons/tel.ico"> Habarlaşnak üçin telefon belgiler: 44-35-35
						<button id="tel" type="submit" class="btn btn-default">
							<a href="tel:+99312443535"><img src="../../../images/icons/tel2.ico"> Jaň etmek</a>
						</button>
					</p>
				  <p class="text-center"><img src="../../../images/icons/yer.ico"> Salgysy: Aşgabat ş.<button id="yer" type="submit" class="btn btn-default"><a href="https://www.google.com/maps/place/Ashgabat+International+Bus+Station/@38.0285046,58.4052094,15z/data=!4m5!3m4!1s0x0:0x1ec14041c663de75!8m2!3d38.0285046!4d58.4052094">Görmek</a></button></p>
         	<p class="text-center"><button id="yer" type="submit" class="btn btn-default"><a href="http://awtomenzil.gov.tm"><img src="../../../images/icons/yer.ico"> Awtomenziliň internet sahypasyna girmek</a></button></p>
         	<p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="well"> </div>

<!-- FOOTER -->

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Baynazar Muhammedow. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- / FOOTER --> 
</body>
</html>
<script src="../../../js/Jquery3.4.1.min.js"></script>
<script src="../../../js/bootstrap.js"></script>

