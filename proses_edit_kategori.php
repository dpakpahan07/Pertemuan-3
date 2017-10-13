<?php //filename: proses_edit_kategori.php

//1.koneksi
include("koneksi.php");

//data dari form
$id = $_POST['id'];
$ket = mysqli_real_escape_string($_POST['ket']));

//2.query
$query = "UPDATE kategori
		SET keterangan = '$ket'
		WHERE id=$id";
mysqli_query($db, $query);

header('location: kategori.php');