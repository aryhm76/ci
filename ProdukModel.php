<?php

namespace App\Models;
use CodeIgniter\Model;

class ProdukModel extends Model {

	//fungsi utk mengambil data khusus sesua dengan id
	public function getProduk($id) {
		return $this->db->table('produk')->where('id', $id)->get()->getRowArray();
	}

	//fungsi untuk menambah produk ke dalam basis data
	public function createProduk($data) {
		return $this->db->table('produk')->insert($data);
	}

	//fungsi untuk membaca/mengambil semua produk dari basis data tabel produk
	public function readProduk() {
		return $this->db->table('produk')->get()->getResultArray();
	}

	//fungsi untuk mengubah/update produk pada basis data
	public function updateProduk($data, $id) {
		return $this->db->table('produk')->update($data, ['id' => $id]);
	}

	//fungsi untuk menghapus produk di basis data
	public function deleteProduk($id) {
		return $this->db->table('produk')->delete(['id' => $id]);
	}

}

?>