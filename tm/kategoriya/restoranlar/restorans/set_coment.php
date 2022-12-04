<?php

	  session_start();
    $mysql_con=mysqli_connect("localhost","root","","myhmanahyzmat");
	
    $id=$_POST["id"];
    $name=$_POST["name"];
    $message=$_POST["message"];
    $rating=$_POST["rating"];
		$status='restoran';
    
		

		$s=$message;
		$teg=false;
		for ($i=0; $i<strlen($s); $i++)
		{
			if ($s[$i]=='<') $teg=true;
			if ($s[$i]=='>') $teg=false;
			if ($teg==false) continue;
			$t="";
			if ($i+4<strlen($s))
			{
				for ($j=0; $j<5; $j++) $t .= $s[$i+$j];
				if ($t!="class") continue;
				$bar=false;
				$pos=$i+5;
				for ($j=$i+5; $j<strlen($s); $j++)
				{
					if ($s[$j]==' ') continue;
					if ($s[$j]=='=')
					{
						$bar=true;
						$pos=$j;
					}
					break;
				}
				if ($bar==false) continue;
				for ($j=$pos+1; $j<strlen($s); $j++)
				{
					if ($s[$j]==' ') continue;
					if ($s[$j]=='"') $bar=true; else $bar=false;
					break;
				}
			}
		}


		if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
		{
    	$ip = $_SERVER['HTTP_CLIENT_IP'];
		} 
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
		{
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} 
		else 
		{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
//		echo($ip);
		
    if ($bar==false) $query=mysqli_query($mysql_con,"INSERT INTO koment (name,coment,star,rest_id,status)
    VALUES ('$name', '$message', '$rating', '$id', '$status')"); 
		else
		{
			$query=mysqli_query($mysql_con,"INSERT INTO hackerlar (ip_adress,haysy_ssylkada,comment)
			VALUES ('$ip', 'http://localhost/MyhmanaHyzmat/tm/kategoriya/restoranlar/restorans/index.php?id=$id', '$message')");

			$_SESSION['flash'] = '
			<div class="b-popup" id="popup3"  style="z-index: 1000000000000;">
				<div class="b-popup-content" style="background-color: red; ">
					<div style="margin: 10px;">
						<h1 align="center"><b>Siz su web-sahypada hacklajak boldunyz!</b></h1>
						<h3 style="margin: 10px; margin-top: 20px;"><b>Sizin ip-adresiniz we elektron-poctanyz web-sahypanyn administrasiyasyna berildi</b></h3>
						<p class="text-center"><button style="margin: 10px"><a href="javascript:PopUpHide3()">Ýapmak</a></button></p>
					</div>
				</div>
			</div>
			';
		}

		
    

		
		header("Location: index.php?id=$id");

		
?>
					
				
			
		