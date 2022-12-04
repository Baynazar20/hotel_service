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
	$query=mysqli_query($mysql_con,"SELECT id, name, adres, img, ssyl, tel from bazarsowda WHERE name like '%".$search."%'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../../images/TürkmenTagam.png" rel="shortcut icon" type="image/x-icon" />
<title>MyhmanaHyzmat - Bazarlar we söwdä merkezleri</title>

<link rel="stylesheet" href="../../../css/hyzmat.css">
<link rel="stylesheet" href="../../../css/hyz_my.css">
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
			<form action="" method="GET" class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="Gözleg">
				</div>
				<button type="submit" class="btn btn-default">Gözlemek</button>
			</form>
		</div>
	</div>
</nav>
<!--  Nav Finish  -->
<!--  HEADER Begin  -->
<header>
  <div class="jumbotron" style="background-image: url(../../../images/bazarsowda/0.jpg); background-size: cover; background-position: center">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-fon">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <h1 class="text-center">Bazarlar we söwdä merkezleri</h1>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        <!--	<p class="text-center"><a class="btn btn-primary btn-lg" role="button">Giňişleýin maglumat</a> </p> -->
        </div>
      </div>
    </div>
  </div>
</header>
<!--  HEADER Finish  -->
<!--  Restoranlar Begin -->
<section style="background-image: url(../../../images/subtlenet2.webp)">
	<div class="row">
		<div class="col-lg-12 page-header text-center">
			<h2>Bazarlar we söwdä merkezleri</h2>
		</div>
	</div>
	<div class="container">
		<div class="row">
		<?php
					
					while($info=mysqli_fetch_array($query)){

					echo('
					<div class="col-lg-4 col-sm-12 text-center posts" style="background-color: white">
						<div class="div1"><a href="'.$info["ssyl"].'"><img alt="140x140" src="'.$info["img"].'"></a></div>
							<div class="div2">
								<a href="'.$info["ssyl"].'"><h3>"'.$info["name"].'"</h3></a><hr>
								<p class="text-left"><img src="../../../images/icons/location.svg"> Salgysy: '.$info["adres"].'</p>
								<p class="text-left"><img src="../../../images/icons/jan.svg"> Telefon belgi: '.$info["tel"].'</p>
							</div>
						</div>');
					}
					?>
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
        <p>Copyright © BaynazarMuhammedow. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- / FOOTER --> 
</body>
</html>
<script src="../../../js/Jquery3.4.1.min.js"></script>
<script src="../../../js/bootstrap.js"></script>
