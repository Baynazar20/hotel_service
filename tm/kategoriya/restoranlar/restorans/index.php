<?php
	$mysql_con=mysqli_connect("localhost","root","","myhmanahyzmat");
	$id=$_GET["id"];
	$query=mysqli_query($mysql_con,"SELECT * from restoran where id='$id'");
	$info=mysqli_fetch_array($query);
session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../../../../images/TürkmenTagam.png" rel="shortcut icon" type="image/x-icon" />
		<title>MyhmanaHyzmat - Restoranlar - menu</title>


		<link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css" />
		<link href="assets/css/icons.css" rel="stylesheet">



		<link rel="stylesheet" href="../../../../css/hyzmat.css">
		<link rel="stylesheet" href="../../../../css/menu_my.css">
		
		<style>
		
				.add_item_box{
					width: 40%
				}
		
			@media only screen and (max-width: 1024px) {
				.add_item_box{
					width: 82%
				}
			}

		</style>

	</head>
	
	<body>
		<!--*-- Begin---->
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
							<a href="../../../../ru/kategoriya/restoranlar/restorans/?id=<?php echo($id);?>" style="padding: 0px; margin: 10px 5px;"><img src="../../../../images/ru.png" style="width: 40px; height: 30px;"></a>
						</li>
						<li class="dropdown dil">
							<a href="../../../../en/kategoriya/restoranlar/restorans/?id=<?php echo($id);?>" style="padding: 0px; margin: 10px 5px;"><img src="../../../../images/en.png" style="width: 40px; height: 30px;"></a>
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

		<!-- HEADER -->
		<header>
			<div class="jumbotron" style="background-image: url(../../../../images/4.png); background-size: cover;">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 maglumat">
							<h1 class="text-center">"<?php echo($info['name']); ?>" restorany barada maglumat</h1>
								<p class="text-center"><img src="../../../../images/icons/tel.ico"> Telefon belgisi: <?php echo($info['nomer']); ?>
									<button id="tel" type="submit" class="btn btn-default">
										<a href="tel:<?php echo($info['jan_ucin_nomer']); ?>"><img src="../../../../images/icons/tel2.ico"> Jaň etmek</a>
									</button>
								</p>
								<p class="text-center"><img src="../../../../images/icons/yer.ico"> Salgysy: <?php echo($info['yerlesyan_yeri']);?> <button id="yer" type="submit" class="btn btn-default"><a href="<?php echo($info['koordinata']); ?>">Girmek</a></button></p>
								<p class="text-center"><img src="../../../../images/icons/sale.ico"> Aksiýa: <?php echo($info['aksiya']); ?></p>
								<p class="text-center"><img src="../../../../images/icons/2.ico"> Meşhurlygy: <?php $s=0; for ($i=1; $i<=$info['abray']; $i++) echo('<img src="../../../../images/icons/1.ico"> ');?></p>
								<div id="we" data-hidden_menu="true" class="hidden_menu">
									<p class="text-center"><img src="../../../../images/icons/dostaw.ico"> Eltip bermek: <?php echo($info['dostawka']); ?></p>
									<p class="text-center"><img src="../../../../images/icons/wifi.ico"> Wi-FI: <?php echo($info['wifi']); ?></p>
									<p class="text-center"><img src="../../../../images/icons/karaoke.ico"> Karaoke: <?php echo($info['karaoke']); ?></p>
									<p class="text-center"><img src="../../../../images/icons/caga.ico"> Çaga zonasy: <?php echo($info['caga_zona']); ?></p>								
									<p class="text-center"><img src="../../../../images/icons/sygadsan.ico"> Sygýan adam sany: <?php echo($info['sygyan_adam_sany']); ?> adam</p>
								</div>
							<p class="text-center togg"><a class="btn btn-primary btn-lg" data-hidden_btn="true" >Giňişleýin maglumat</a> </p>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- / HEADER --> 

	<!--  SECTION-1 -->
		<section style="position: relative">
			<div style="width: 100%;height: auto;min-height: 300px;display: flex;justify-content: center;align-items: center">
				<div class="add_item_box" style="height: auto;display: flex;align-items: center;justify-content: flex-start;flex-direction: column">
						<div style="width: 100%;height: 80px;display: flex;justify-content: center;align-items: center">
							<p style="font-size: 20px"><a class="buttongosmak"><img src="../../../../images/icons/sebet.svg"> Sebet</a></p>
						</div>
						<div id="item_box" style="width: 100%;height: auto"></div>
						<div class="box_jem">
							<div></div>
							<div>Jemi:</div>
							<div data-jemi="price">0</div>
							<div data-jemi="count">0</div>
						</div>
						<p><a href="javascript:PopUpShow1()" class="buttongosmak b-container" style="margin: 10px">Stol sargyt etmek</a>
						<a href="javascript:PopUpShow2()" class="buttongosmak b-container" style="margin: 10px">Eltip bermek</a></p>
						<div class="b-popup" id="popup1" style="z-index: 1000000000000">
							<div class="b-popup-content">
								<h1 align="center"><b>Maglumatlary giriziň</b></h1>
								<h2 style="margin-left: 20px;">Restorana barjak wagtyň:</h2>
								<input type="datetime-local" placeholder="Restorana barjak wagtyň" style="margin-left: 20px; width: 460px; border-radius: 5px">
								<h2 style="margin-left: 20px;">Näçe adam:</h2>
								<input type="number" placeholder="Näçe adam:" style="margin-left: 20px; width: 460px; border-radius: 5px">
								<h1 align="center"><b>Töleg:</b></h1>
								<h2 style="margin-left: 20px;">Töleg kartynyzyň nomerini giriziň:</h2>
								<input type="tel" placeholder="Töleg kartynyzyň nomerini giriziň" style="margin-left: 20px; width: 460px; border-radius: 5px">
								<p class="text-center"><button style="margin: 10px"><a href="javascript:PopUpHide1(); alert('Siziň töleginiň geçdi. Içdäniň açyk bolsun!')">Tölemek</a></button>
								<button style="margin: 10px"><a href="javascript:PopUpHide1()">Goý bolsun etmek</a></button></p>
							</div>
						</div>
						<div class="b-popup" id="popup2" style="z-index: 1000000000000">
							<div class="b-popup-content">
								<h1 align="center"><b>Maglumatlary giriziň</b></h1>
								<h2 style="margin-left: 20px;">Salgyňyzy giriziň:</h2>
								<input type="text" placeholder="Salgyňyzy giriziň" style="margin-left: 20px; width: 460px; border-radius: 5px">
								<h2 style="margin-left: 20px;">Telefon belgiňiz:</h2>
								<input type="text" placeholder="Telefon belgiňiz" style="margin-left: 20px; width: 460px; border-radius: 5px">
								<p class="text-center"><button style="margin: 10px"><a href="javascript:PopUpHide2(); alert('Siziň sargydyňyz 30-60 minutdan barar! Içdäniň açyk bolsun!')">Sargyt etmek</a></button>
								<button style="margin: 10px"><a href="javascript:PopUpHide2()">Goý bolsun etmek</a></button></p>
							</div>
						</div>
						<?php 
						if (isset($_SESSION['flash'])) {
						   echo $_SESSION['flash'];
						   unset($_SESSION['flash']);
						}
						?>						
				</div>
			</div>
			<div class="row">
					<div class="col-lg-12 page-header text-center">
						<h2>Menýu</h2>
					</div>
			</div>
			<div class="container">
				<div class="tabbed">
					<?php
						$index="1";
						$query_naw=mysqli_query($mysql_con,"SELECT id,name,full_name,img from restoran_food_cats");
							while($query_naw_info=mysqli_fetch_array($query_naw)){
								$query_naw_count=mysqli_query($mysql_con,"SELECT count(*) as total from menu WHERE name='$info[name]' and category='$query_naw_info[name]'");	
								$count_row=mysqli_fetch_assoc($query_naw_count);
								if($count_row['total']>0){
									if($index=="1"){
										echo('<input type="radio" name="tabs" id="tab-nav-'.$index.'" checked>
										<label for="tab-nav-'.$index.'"><img src="'.$query_naw_info['img'].'" style="width: 19px; height: 19px;"> '.$query_naw_info['full_name'].' ('.$count_row['total'].')</label>');
									}else{
										echo('<input type="radio" name="tabs" id="tab-nav-'.$index.'">
										<label for="tab-nav-'.$index.'"><img src="'.$query_naw_info['img'].'" style="width: 19px; height: 19px;"> '.$query_naw_info['full_name'].' ('.$count_row['total'].')</label>');
									}
									$index++;
								}
							}

					?>

					<!-- <input type="radio" name="tabs" id="tab-nav-1" checked>
					<label for="tab-nav-1"><img src="../../../../images/icons/esas.ico" style="width: 19px; height: 19px;"> ESASY NAHARLAR (16)</label>
					<input type="radio" name="tabs" id="tab-nav-2ž">
					<label for="tab-nav-2"><img src="../../../../images/icons/salat.svg" style="width: 19px; height: 19px;"> SALATLAR (8)</label>
					<input type="radio" name="tabs" id="tab-nav-3">
					<label for="tab-nav-3"><img src="../../../../images/icons/fastfood.svg" style="width: 19px; height: 19px;"> KEBAP (8)</label>
					 -->
					<div class="tabs">

						<?php
							$index="1";
							$query_naw=mysqli_query($mysql_con,"SELECT id,name,full_name from restoran_food_cats");
								
								while($query_naw_info=mysqli_fetch_array($query_naw)){
									$query_naw_count=mysqli_query($mysql_con,"SELECT count('id') as total from menu WHERE name='$info[name]' and category='$query_naw_info[name]' and status='restoran'");	
									$count_row=mysqli_fetch_assoc($query_naw_count);
									
									if($count_row['total']>0){
										$query_menu=mysqli_query($mysql_con,"SELECT * from menu WHERE name='$info[name]' and category='$query_naw_info[name]'");	
										
										echo("<div class='row'>");
										while($info_menu=mysqli_fetch_array($query_menu)){
											if ($info_menu["duzumi_tm"]=="") echo('
											<div class="food_list" data-box_id="'.$info_menu["box_id"].'">
												<img src="'.$info_menu["img"].'">
												<p>"'.$info_menu["name_tm"].'"</p>
												<p class="baha" style="font-size: 25px;">'.$info_menu["price"].' manat</p>
												<button class="buttongosmak" data-btn_id="'.$info_menu["box_id"].'">✚ sebete goşmak</button>
											</div>');
											else echo('
											<div class="food_list" data-box_id="'.$info_menu["box_id"].'">
												<img src="'.$info_menu["img"].'">
												<p>"'.$info_menu["name_tm"].'"</p>
												<p class="baha" style="font-size: 25px;">'.$info_menu["price"].' manat</p>
												<p class="text-center">Düzümi: '.$info_menu["duzumi_tm"].'</p>
												<button class="buttongosmak" data-btn_id="'.$info_menu["box_id"].'">✚ sebete goşmak</button>
											</div>');
										}
										
										echo("</div>");
									
									$index++;
									}

								}

						?>
						
												
					</div>
				</div>
			</div>
			
			
		</section>
		<div class="well"> </div>

		<!-- FOOTER -->
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-3 col-xs-12 col-lg-6">
					<div class="jumbotron">
						<div class="row text-center">
							<div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h2>Teswir goýmak</h2>
							</div>
							<div class="text-center col-lg-12"> 
								<form action="set_coment.php" method="post" role="form" id="feedbackForm" class="text-center">
									<div class="form-group">
										<label for="name">Adyňyz</label>
										<input required type="text" class="form-control" id="name" name="name" placeholder="Adyňyz">
										<input name="id" value="<?php echo($id); ?>" type="hidden">
										<span class="help-block" style="display: none;">Haýyş adyňyzy giriziň.</span>
									</div>
									<div class="form-group">
										<label for="message">Teswir</label>
										<textarea required rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Teswiriňizi giriziň"></textarea>
										<span class="help-block" style="display: none;">Teswiri giriziberiň.</span>
									</div>
									<span class="help-block" style="display: none;">Please enter a the security code.</span>
									<div class="star-rating">
										<input type="radio" id="5-stars" name="rating" value="5" />
										<label for="5-stars" class="star">&#9733;</label>
										<input type="radio" id="4-stars" name="rating" value="4" />
										<label for="4-stars" class="star">&#9733;</label>
										<input type="radio" id="3-stars" name="rating" value="3" />
										<label for="3-stars" class="star">&#9733;</label>
										<input type="radio" id="2-stars" name="rating" value="2" />
										<label for="2-stars" class="star">&#9733;</label>
										<input type="radio" id="1-star" name="rating" value="1" />
										<label for="1-star" class="star">&#9733;</label>
									</div>
									<button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" style=" margin-top: 10px;"> Ugratmak</button>							
								</form>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<!-- FOOTER -->
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-3 col-xs-12 col-lg-6">
					<div class="jumbotron">
						<div class="row text-center">
							


							<?php
								$query_com=mysqli_query($mysql_con,"SELECT * from koment where rest_id='$id' and status='restoran'");
								while($info=mysqli_fetch_array($query_com)){

								echo('
											<div class="komment">
												<div style="width: 100%;height: auto;margin-top: 30px">
													<div style="width: 100%;height: 30px;border-bottom: #585858 solid 1px;display: flex">
														<p>'.$info['name'].'</p>
														<div class="star-rating_of" style="margin-left: 50px">
										');
									
												for($i=1;$i<=$info['star'];$i++){

												echo('<label class="star1">&#9733;</label>
												');

												}
											
											
											echo('</div>
													</div>
														<p  style="width: 100%;height: auto;text-align: left;font-size: 15px">'.$info['coment'].'</p>
												</div> 
											</div>');
												
											
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
		
		
		
		
		?>
		<footer class="text-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<!-- <p>Copyright © Baynazar. All rights reserved.</p> -->
					</div>
				</div>
			</div>
		</footer>

		<script src="../../../../js/Jquery3.4.1.min.js"></script>
		<script src="../../../../js/bootstrap.js"></script>
		<script src="../../../../js/my.js"></script>
		<script src="../../../../js/jquery-2.0.2.min.js"></script>
		<script src="new.js"></script>
		
		<script src="assets/plugins/notifications/js/notifications.min.js"></script>
		
		
		
	</body>
</html>
<!--

Nahili?</p>
	</div>
</div>
<div class="komment">
<div style="width: 100%;height: auto;margin-top: 30px">
<div style="width: 100%;height: 30px;border-bottom: #585858 solid 1px;display: flex">
<p>Basga sms</p>
<div class="star-rating_of" style="margin-left: 50px">
<label class="star1">&#9733;</label>
<label class="star1">&#9733;</label>
<label class="star1">&#9733;</label>
<label class="star1">&#9733;</label>
<label class="star1">&#9733;</label>
</div>
</div>
<p  style="width: 100%;height: auto;text-align: left;font-size: 15px">Biderek sayt


-->

