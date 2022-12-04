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
<link rel="stylesheet" href="../../../../css/hyz_my.css">
</head>
<body>

<!--  Nav Begin  -->
<nav class="navbar navbar-default">
	<div class="container-fluid"> 
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="../" style="font-family: Blackadder ITC; font-size: 30px"><b style="text-decoration:underline">MyhmanaHyzmat</b></a> 
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dil">
					<a href="" style="padding: 0px; margin: 10px 5px;"><img src="../../../../images/tm.png" style="width: 40px; height: 30px;"></a>
				</li>
				<li class="dropdown dil">
					<a href="../../../../../ru/kategoriya/TürkmenTagam/kategoriya/restoran/" style="padding: 0px; margin: 10px 5px;"><img src="../../../../images/ru.png" style="width: 40px; height: 30px;"></a>
				</li>
				<li class="dropdown dil">
					<a href="../../../../../en/kategoriya/TürkmenTagam/kategoriya/restoran/" style="padding: 0px; margin: 10px 5px;"><img src="../../../../images/en.png" style="width: 40px; height: 30px;"></a>
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
			<div class="jumbotron" style="background-image: url(../../../../images/room/yyldyz/0.jpg); background-size: cover; background-size: cover; background-repeat: no-repeat">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 maglumat">
							<h1 class="text-center">"<?php echo($info['name']); ?>" myhmanhanasy barada maglumat</h1>
								<p>&nbsp;</p>
								<p class="text-center"><img src="../../../../images/icons/tel.ico"> Telefon belgisi: <?php echo($info['nomer']); ?>
									<button id="tel" type="submit" class="btn btn-default">
										<a href="tel:<?php echo($info['jan_ucin_nomer']); ?>"><img src="../../../../images/icons/tel2.ico"> Jaň etmek</a>
									</button>
								</p>
								<p class="text-center"><img src="../../../../images/icons/yer.ico"> Salgysy: <?php echo($info['yerlesyan_yeri']);?> <button id="yer" type="submit" class="btn btn-default"><a href="<?php echo($info['koordinata']); ?>">Girmek</a></button></p>
								<p class="text-center"><img src="../../../../images/icons/2.ico"> Meşhurlygy: <?php $s=0; for ($i=1; $i<=$info['abray']; $i++) echo('<img src="../../../../images/icons/1.ico"> ');?></p>
								<p>&nbsp;</p>
						</div>
					</div>
				</div>
			</div>
		</header>
<!--  HEADER Finish  -->
<!--  Restoranlar Begin -->
<section>
	<div class="row">
		<div class="col-lg-12 page-header text-center">
			<h2>"ÝYLDYZ" myhmanhanasy</h2>
		</div>
	</div>
	<div class="container">
		<div class="row">
	
	<?php
					$mysql_con=mysqli_connect("localhost","root","","myhmanahyzmat");
					$query=mysqli_query($mysql_con,"SELECT id, name, img, meydan, baha, yer from yyldyz_otel");
	
					while($info=mysqli_fetch_array($query)){

					echo('
					<div class="col-lg-4 col-sm-12 text-center posts">
						<div class="div1" id="myh"><img alt="140x140" src="'.$info["img"].'"></div>
							<div class="div2" id="myh2">
								<h3>'.$info["name"].'</h3><hr>
								<p class="text-left"><img src="../../../../images/icons/baha.ico"> Bahasy: '.$info["baha"].' manat / 1 gije</p>
								<button><a href="ici.php" class="b-container" style="margin: 10px; font-family: Cambria, Times;">Girmek</a></button>
							</div>
						</div>');
					}
					?>
			</div>
			
						
	</div>
	<!--
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
			<p class="text-center"><button style="margin: 10px"><a href="javascript:PopUpHide1(); alert('Siziň töleginiň geçdi. Dynjyňy!')">Tölemek</a></button>
			<button style="margin: 10px"><a href="javascript:PopUpHide1()">Goý bolsun etmek</a></button></p>
		</div>
	</div>
	-->
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
		