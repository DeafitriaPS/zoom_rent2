<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
	protected $table = 'tbl_formpesan';
	protected $primaryKey = 'id_pesan';
	protected $dateTime = 'date';
	protected $allowedFields = ['nama', 'email', 'instansi', 'telp', 'alamat', 'tanggalpeminjaman', 'no_pembayaran'];

	public function countPembayaran()
	{
		return $this->db->table('tbl_formpesan')->countAll();
	}
	public function tambahDataPembayaran($noPembayaran)
	{
		$pesananModel = new PesananModel();

		$data = [
			'no_pembayaran' => $noPembayaran,
			'status' => '0'
		];

		// return $this->db->insert('tbl_formpesan', $data);
		$pesananModel->insert($data);
	}
}
