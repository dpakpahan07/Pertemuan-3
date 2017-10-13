<?php // filename: index.php
include("koneksi.php");
$query = SELECT * FROM kontak
		INNER JOHN kategori
		ON kontak, kategori_id

?>

<!DOCTYPE html>
<html>
<head>
	<title>Phone Book</title>
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="filter">
	<b>Filter berdasarkan kategori: </b>
	<?php
	$q2 = "SELECT * FROM kategori";
	$hasil = mysqli_query($db, $query2);
	while($row = mysqli_fetch_assoc)
	<form action="" method="post">
		<select name="">
			<option value=""></option>
		</select>
		<input type="submit" name="filter" value="Filter" />
	</form>
</div>
<div id="search">
	<b>Search: </b>
	<form action="" method="post">
		<input type="text" name="search_text" />
		<input type="submit" name="cari" value="Cari" />
	</form>
</div>
<div id="konten">
	<h2>Kontak</h2>
	<a href="form_tambah_kontak.php">Tambah Kontak</a>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Hp.</th>
				<th>Email</th>
				<th>Kategori</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['keterangan']; ?></td>
				<td>
					<a href="">Edit</a> | 
					<a href="">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</body>
</html>