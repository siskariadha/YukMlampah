<?php
	if(isset($_POST['tambah'])){
		include 'koneksi.php';

		$email        = $_POST['email'];
		$name         = $_POST['name'];
		$country      = $_POST['negara'];
		$hotel        = $_POST['hotel'];
		$check_in      = $_POST['checkin'];
		$check_out     = $_POST['checkout'];
		$confort      = $_POST['confornt'];
		$adult        = $_POST['adult'];
		$children     = $_POST['children'];
		$room         = $_POST['room'];
		$message      = $_POST['message'];

		$input = mysql_query("INSERT INTO tbl_usr VALUES (NULL, '$email', '$country', '$name', '$hotel', '$checkin', '$checkout', '$confort', '$adult', '$children', '$room', '$message')") or die("gagal");

		/* if($input){
			header("location:view.php");
		}else{
			echo "Data GAGAL diinput";
			echo '<a href="tambah.php">Kembali</a>';
		} */
	}
	else{
		echo "<script><window.history.back()/script>";

	}
?>