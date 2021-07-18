<!DOCTYPE html>
<html>
<head>
	<title>Create Produk</title>

	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		header {
			background: green;
			padding: 16px;
			margin-bottom: 16px;
			text-align: center;
			color: #fff;
		}
		#create-produk {
			margin: auto;
			width: 25%;
			border: 1px solid green;
			padding: 16px;
		}
		#create-produk input {
			display: inline-block;
			width: 100%;
		}
	</style>
</head>
<body>

	<!--elemen tampilan header-->
	<header>
		<h1>Create Produk</h1>
	</header>

	<div id="create-produk">
		<!--elemen form menambah produk-->
		<form method="post" action="<?php echo base_url('produk/create'); ?>">
			<label>Nama produk</label>
			<br>
			<input type="text" name="nama_produk" required="required">
			<br><br>
			<label>Jumlah produk</label>
			<br>
			<input type="text" name="jumlah_produk" required="required">
			<br><br>
			<button type="submit" name="submit">Simpan</button>
			<a href="<?php echo base_url('produk/read');?>">Batal</a>
		</form>
	</div>

</body>
</html>