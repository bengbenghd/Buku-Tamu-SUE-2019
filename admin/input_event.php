<!DOCTYPE html>
<html>
<head>
	<title>Tambah Event</title>
	<link rel="stylesheet" type="text/css" href="../public/css/style2.css">
</head>
<body>
	<div class="judul">		
		<h1>Tambah Event</h1>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Tambah data</h3>
	<!-- form untuk tamba data event dengan aksi ada di aksi_input.php -->
	<form action="aksi_input.php" method="post">		
		<table>
			<tr>
				<td>Nama Pelanggan</td>
				<td><input type="text" name="nama">
				</td>					
			</tr>	
			<tr>
				<td>No KTP</td>
				<td><input type="text" name="no_ktp"></td>					
			</tr>	
			<tr>
				<td>Nama Instansi</td>
				<td><input type="text" name="nama_ins"></td>					
			</tr>
			<tr>
				<td>Nama Acara</td>
				<td><input type="text" name="title"></td>					
			</tr>
			<tr>
				<td>Tanggal Mulai</td>
				<td><input type="date" name="start_date"></td>					
			</tr>
			<tr>
				<td>Tanggal Selesai</td>
				<td><input type="date" name="end_date"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>