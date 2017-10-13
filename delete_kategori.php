<?php //filename: delete_kategori.php

//1.koneksi
include("koneksi.php");

$id = $_GET['id'];

//data dari form
$id = $_POST['id'];
$ket = mysqli_real_escape_string($_POST['ket']));

//2.query
$query = "DELETE * FROM kategori
		WHERE id=$id";
mysqli_query($db, $query);

header('location: kategori.php');