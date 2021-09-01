<?php

namespace App\Models;

use CodeIgniter\Model;

class TamuModel extends Model
{
	protected $table = 'tbl_formpesan';
	protected $primaryKey = 'id_pesan';
	protected $dateTime = 'date';
	protected $allowedFields = ['nama', 'email', 'instansi', 'telp', 'alamat', 'tanggalpeminjaman', 'no_pembayaran'];

	public function countPembayaran()
	{
		return $this->db->get('tbl_formpesan')->num_rows();
	}
	public function tambahDataPembayaran($noPembayaran)
	{
		$data = [
			'no_pembayaran' => $noPembayaran,
			'status' => '0'
		];

		$this->db->insert('tbl_formpesan', $data);
	}
}
