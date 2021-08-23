<?php


namespace App\Controllers;

use App\Models\FormpesanModel;

class Formpesan extends BaseController
{

	protected $formpesanModel;

	public function __construct()
	{
		$this->formpesanModel = new FormpesanModel();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function save_formpesan()
	{
		$this->formpesanModel->save([
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'telp' => $this->request->getVar('telp'),
			'instansi' => $this->request->getVar('instansi'),
			'alamat' => $this->request->getVar('alamat'),
			'tanggalpeminjaman' => $this->request->getVar('tanggalpeminjaman')
		]);

		return redirect()->to('/pages/formpesan');
	}

	public function tambah_formpesan()
	{

		$data = [
			'title' => 'Tambah Formpesan',
		];
		return view('pages/formpesan', $data);
	}
}
