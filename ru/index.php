<?php 

	$mysql_con=mysqli_connect("localhost","root","","myhmanahyzmat");
	$query=mysqli_query($mysql_con,"SELECT id,name,img,ssyl from reklama");
  $hepgow=mysqli_query($mysql_con,"SELECT id,name,text,img from hepgowsy");
	

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>MyhmanaHyzmat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../images/TürkmenTagam.png" rel="shortcut icon" type="image/x-icon" />

<link href="inphp.php" rel="stylesheet" type="text/css">

<link href="../css/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../css/owl.carousel.css">
<link rel="stylesheet" href="../css/my.css">


</head>

<body style="background-image: url(../images/subtlenet2.webp)">
<div id="mainWrapper">
	
	<section class="text-fon" id="offer" style="background-image: url(../images/0.jpg); background-position: center; background-size: cover;">
	<!--	<img src=images/icon.png> -->
		<p>&nbsp;</p>
		<div style="background-color: rgba(255, 255, 255, .6); border-radius: 15px;">
			<p>&nbsp;</p>
			<div style="text-align: center;">
			<a style="font-family: Blackadder ITC; font-size: 40px; text-decoration:underline; color: black">Myhmana</a><a style="font-size: 1px;"> </a><a style="font-family: Blackadder ITC; font-size: 40px; text-decoration:underline; color: black">Hyzmat</a>
			<p style="text-align: center; color: black; font-size: 30px;">Müňlerçe ädim syýahat etmek birinji ädimden baslanýar!</p>
			</div>
			<p>&nbsp;</p>
		</div>
		<p>&nbsp;</p>
	</section>
	
	<div id="content">
	
		<!--  Kategiriýalar Begin  -->  	
		<section class="sidebar"> 
			<div id="menubar">
				<nav class="menu">
					<b style="font-size: 20px">Hyzmatlar</b><hr>
					<ul>
						<li><img src="../images/icons/otel.ico"><a href="kategoriya/myhmanhanalar/" title="Myhmanhanalar">Myhmanhanalar</a></li>
						<li><img src="../images/icons/kafe.svg"><a href="kategoriya/restoranlar/" title="Restoranlar">Restoranlar</a></li>
						<li><img src="../images/icons/kafe.svg"><a href="kategoriya/kafe-barlar/" title="Kafe-barlar">Kafe-barlar</a></li>
						<li><img src="../images/icons/dostaw.ico"><a href="kategoriya/eltipbermekhyzmatlary/" title="Eltip bermek hyzmaty">Eltip bermek hyzmatlary</a></li>
						<li><img src="../images/icons/taxi.ico"><a href="kategoriya/taxi/" title="Taksi">Taksi</a></li>
						<li><img src="../images/icons/awtomenzil.ico"><a href="kategoriya/awtomenzil/" title="Awtomenzil">Halkara awtomenzil</a></li>
						<li><img src="../images/icons/wokzal.ico"><a href="kategoriya/wokzal/" title="Wokzal">Wokzal</a></li>
						<li><img src="../images/icons/airoport.ico"><a href="kategoriya/airport/" title="Howa menzili">Howa menzili</a></li>
						<li><img src="../images/icons/teatr.ico"><a href="kategoriya/teatrkino/" title="Teatrlar we kinokonsert merkezleri">Teatrlar we kinokonsert merkezleri</a></li>
						<li><img src="../images/icons/park.ico"><a href="kategoriya/medenidync/" title="Medeni dynç alyş ýerler">Medeni dynç alyş ýerler</a></li>
						<li><img src="../images/icons/biznessentr.ico"><a href="kategoriya/bazarsowda/" title="Bazarlar we söwdä merkezleri">Bazarlar we söwdä merkezleri</a></li>
						<li><img src="../images/icons/hassahana.ico"><a href="kategoriya/hassahana/" title="Halkara we merkezi hassahanalar">Halkara we merkezi hassahanalar</a></li>
					</ul>
				</nav>
			</div>
		</section>
		<!--  Kategiriýalar Finish  -->  	
		
		<!--  Reklamalar Begin  -->  
		<section class="mainContent">
			<!--  Aksiýalar skidkalar we s.m. Begin  -->  	
			<hr style="margin: 0;"><div style="padding: 10px; background-image: url(../images/v.jpg)">
						<b style="font-size: 30px; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">Hyzmatlar</b>
					</div><hr style="margin: 0;">
			<div class="container">
				<div class="owl-carousel owl-theme blog-post">
					<article class="blog-content">
						<a href="kategoriya/myhmanhanalar/"><div class="images"><img alt="1.jpg" src="../images/hyzmatlar/1.jpg"></div></a>
						<div class="aktaz">
							<p style="font-size: 20px"><b>Myhmanhanalar</b></p>
							<a href="kategoriya/myhmanhanalar/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
					<article class="blog-content">
						<div class="images"><img alt="2.jpg" src="../images/hyzmatlar/2.jpg"></div>
						<div class="aktaz">
							<p id="ady" style="font-size: 20px"><b>Restoranlar</b></p>
							<a href="kategoriya/restoranlar/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
					<article class="blog-content">
						<div class="images"><img alt="3.jpg" src="../images/hyzmatlar/3.jpg"></div>
						<div class="aktaz">
							<p id="ady" style="font-size: 20px"><b>Kafe-barlar</b></p>
							<a href="kategoriya/kafe-barlar/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
					<article class="blog-content">
						<div class="images"><img alt="4.jpg" src="../images/hyzmatlar/4.jpg"></div>
						<div class="aktaz">
							<p id="ady" style="font-size: 20px"><b>Eltip bermek hyzmaty</b></p>
							<a href="kategoriya/eltipbermekhyzmatlary/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
					<article class="blog-content">
						<div class="images"><img alt="5.jpg" src="../images/hyzmatlar/5.jpg"></div>
						<div class="aktaz">
							<p id="ady" style="font-size: 20px"><b>Taksi</b></p>
							<a href="kategoriya/taxi/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
					<article class="blog-content">
						<div class="images"><img alt="6.jpg" src="../images/hyzmatlar/6.jpg"></div>
						<div class="aktaz">
							<p id="ady" style="font-size: 20px"><b>Awtomenzil</b></p>
							<a href="kategoriya/awtomenzil/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
					<article class="blog-content">
						<div class="images"><img alt="7.jpg" src="../images/hyzmatlar/7.jpg"></div>
						<div class="aktaz">
							<p id="ady" style="font-size: 20px"><b>Wokzal</b></p>
							<a href="kategoriya/wokzal/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
					<article class="blog-content">
						<div class="images"><img alt="8.jpg" src="../images/hyzmatlar/8.jpg"></div>
						<div class="aktaz">
							<p id="ady" style="font-size: 20px"><b>Howa menzili</b></p>
							<a href="kategoriya/airport/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
					<article class="blog-content">
						<div class="images"><img alt="9.jpg" src="../images/hyzmatlar/9.jpg"></div>
						<div class="aktaz">
							<p id="ady" style="font-size: 20px"><b>Teatrlar we kinokonsert merkezleri</b></p>
							<a href="kategoriya/teatrkino/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
					<article class="blog-content">
						<div class="images"><img alt="9.jpg" src="../images/hyzmatlar/9.jpg"></div>
						<div class="aktaz">
							<p id="ady" style="font-size: 20px"><b>Medeni dynç alyş ýerler</b></p>
							<a href="kategoriya/medenidync/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
					<article class="blog-content">
						<div class="images"><img alt="9.jpg" src="../images/hyzmatlar/9.jpg"></div>
						<div class="aktaz">
							<p id="ady" style="font-size: 20px"><b>Bazarlar we söwdä merkezleri</b></p>
							<a href="kategoriya/bazarsowda/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
					<article class="blog-content">
						<div class="images"><img alt="9.jpg" src="../images/hyzmatlar/9.jpg"></div>
						<div class="aktaz">
							<p id="ady" style="font-size: 20px"><b>Halkara we merkezi hassahanalar</b></p>
							<a href="kategoriya/hassahana/" class="kategoriya">&nbsp;</a>	
						</div>
					</article>
				</div>
			</div>
			<!--  Beýleki firmalaryň reklamalary Begin  -->  	
			<hr style="margin: 0;"><div style="padding: 10px; background-image: url(../images/v.jpg)">
						<b style="font-size: 30px; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">Mahabat bölümi</b>
					</div><hr style="margin: 0; margin-bottom: 20px;">
			<div class="productRow"> 
				<?php
					while($info=mysqli_fetch_array($query))
					{
						echo(
						'<a target="_blank" href="'.$info["ssyl"].'">
							<article class="productInfo">
								<div style="background-color: white;">
								<div><img alt="sample" src="'.$info["img"].'"></div>
								<p class="price">'.$info["name"].'</p>
								</div>
							</article>
						</a>'
						);
					}
				?>
			</div>
		</section>
		<!--  Reklamalar Finish  -->  	
		<div><img alt="sample" src="../images/reklama/7.gif" style="width: 100%"></div>
		<div><a target="_blank" href="https://rysgalmebel.com"><img alt="sample" src="../images/1.gif" style="width: 100%"></a></div>
			
	</div>
	<footer> 
		<div>
			<p style="color: #121111">MyhmanaHyzmat barada:</p>
		</div>
		<div>
			<p><a href="biz_barada/">Taslama barada</a></p>
			<p><a href="">MyhmanaHyzmat.com</a></p>
		</div>
		<div>
			<p><a href="">MyhmanaHyzmat@gmail.com</a></p>
			<p><a href="">MyhmanaHyzmat_official</a></p>
		</div>
  </footer>
</div>
<!-- Single button -->
<script src="../js/Jquery3.4.1.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>