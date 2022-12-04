<?php

    $mysql_con=mysqli_connect("localhost","root","","myhmanahyzmat");
	
    $id=$_POST["id"];
    $name=$_POST["name"];
    $message=$_POST["message"];
    $rating=$_POST["rating"];
		$status='restoran';
		
    $query=mysqli_query($mysql_con,"INSERT INTO koment (name,coment,star,rest_id,status)
    VALUES ('$name', '$message', '$rating', '$id', '$status')");

    header("Location: index.php?id=$id");



?>