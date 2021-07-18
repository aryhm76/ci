<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProdukModel;

class Produk extends BaseController
{

	//Fungsi utama controller Produk
	public function index()
	{
		echo "<h1 style='text-align:center;padding:16px;'>Halaman Utama</h1>";
	}



	//Fungsi menampilkan form utk menambah produk baru
	public function tambah()
	{
		return view('produk_create'); //memanggil file dengan nama produk_create pada folder view
	}

	//Fungsi menampilkan form utk menambah produk baru
	public function edit($id)
	{

		$produkModel = new ProdukModel;

		$data['produk'] = $produkModel->getProduk($id);

		//memanggil file dengan nama produk_read pada folder view dengan menyertakan data utk ditampilkan
		return view('produk_update', $data);
	}




	//Fungsi utk mengambil data dari form tambah data dan mengirimkan ke Model create produk
	public function create()
	{

		// Mengambil nilai yang akan ditambahkan dari form tambah produk dengan method POST dn simpan dalam variabel
	    $nama = $this->request->getPost('nama_produk');
	    $jumlah = $this->request->getPost('jumlah_produk');
	 
	    // Membuat koleksi data tipe array yang disiapkan untuk ditambahkan ke tabel basis data
	    $data = [
	        'nama_produk' => $nama,
	        'jumlah_produk' => $jumlah
	    ];

	    //membuat instance objek baru dari class ProdukModel
		$modelProduk = new ProdukModel;

	    //Mengirimkan data yang telah diambil dari form tambah data ke class Model create
	    $result = $modelProduk->createProduk($data);

	    //Mengarahkan/redirect ke halaman awal produk jika proses berhasil
	    if ($result) {
	    	return redirect()->to(base_url('produk/read'));
	    }
	}

	//Fungsi untuk menampilkan view read produk
	public function read()
	{
		//membuat objek baru dari class ProdukModel
		$produkModel = new ProdukModel;

		//memanggil fungsi readProduk() dari class Model dan menampung hasil pengambilan data pdvariabel $data
		$data['produk'] = $produkModel->readProduk();

		//memanggil file dengan nama produk_read pada folder view dengan menyertakan data utk ditampilkan
		return view('produk_read', $data);
	}

	//Fungsi mengubah produk
	public function update($id)
	{
		// Mengambil nilai yang akan ditambahkan dari form tambah produk dengan method POST dn simpan dalam variabel
	    $nama = $this->request->getPost('nama_produk');
	    $jumlah = $this->request->getPost('jumlah_produk');
	 
	    // Membuat koleksi data tipe array yang disiapkan untuk ditambahkan ke tabel basis data
	    $data = [
	        'nama_produk' => $nama,
	        'jumlah_produk' => $jumlah
	    ];

	    //membuat instance objek baru dari class ProdukModel
		$modelProduk = new ProdukModel;

	    //Mengirimkan data yang telah diambil dari form tambah data ke class Model create
	    $result = $modelProduk->updateProduk($data, $id);

	    //Mengarahkan/redirect ke halaman awal produk jika proses berhasil
	    if ($result) {
	    	return redirect()->to(base_url('produk/read'));
	    }
	}

	//Fungsi menghapus produk
	public function delete($id)
	{
		$modelProduk = new ProdukModel;

		$result = $modelProduk->deleteProduk($id);

	    if ($result) {
	    	return redirect()->to(base_url('produk/read'));
	    }
		
	}

}
