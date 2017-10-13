<?php //filename:koneksi.php

//1.koneksi
$db = mysqli_connect("localhost","root","","kalbisweb");

if(mysqli_connect_errno()){
	die(mysqli_connect_error());
}

?>