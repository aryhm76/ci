<!DOCTYPE html>
<html>
<head>
	<title>Produk</title>

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
		#read-produk {
			margin: auto;
			width: 25%;
		}

		#btn-tambah-container {
			display: block;
			text-align: right;
			padding-top: 16px;
			padding-bottom: 16px;
		}

		#btn-tambah {
			background: green;
			color: #fff;
			padding: 8px;
			border-radius: 16px;
			text-decoration: none;
		}

		#produk-item {
			border: 1px solid #e0e0e0;
			padding: 16px;
			margin-bottom: 16px;
			border-radius: 16px;
		}
		#produk-item #nama-produk {
			font-size: 24px;
			color: green;
		}
		#produk-item #jumlah-produk {
			font-size: 20px;
			color: #4c4c4c;
		}

		#produk-item #btn-container {
			display: block;
			padding: 16px;
			text-align: right;
		}

		#produk-item #btn-edit {
			text-decoration: none;
			background: blue;
			color: #fff;
			padding: 4px;
			border-radius: 4px
		}

		#produk-item #btn-delete {
			text-decoration: none;
			background: red;
			color: #fff;
			padding: 4px;
			border-radius: 4px
		}

	</style>
</head>
<body>

	<!--elemen tampilan header-->
	<header>
		<h1>Read Produk</h1>
	</header>

	<div id="read-produk">

		<div id="btn-tambah-container">
			<a id="btn-tambah" href="<?php echo base_url('produk/tambah'); ?>">+Tambah Produk</a>
		</div>

		<!-- fungsi perulangan untuk menampilkan semua data dari table produk dari basis data -->
		<?php foreach ($produk as $data) : ?>
			<div id="produk-item">
				<p id="nama-produk"><?php echo $data['nama_produk']; ?></p>
				<p id="jumlah-produk"><?php echo $data['jumlah_produk']; ?></p>
				<div id="btn-container">
					<a id="btn-edit" href="<?php echo base_url('produk/edit/'.$data['id']); ?>">Edit</a>
					<a id="btn-delete" href="<?php echo base_url('produk/delete/'.$data['id']); ?>">Delete</a>
				</div>
			</div>
		<?php endforeach ?>

	</div>

</body>
</html>