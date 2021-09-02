<?php


namespace App\Controllers;

use App\Models\TamuModel;

class Tamu extends BaseController
{

	protected $tamuModel;

	public function __construct()
	{
		$this->tamuModel = new TamuModel();
	}

	public function save_formpesan()
	{
		$this->tamuModel->save([
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'telp' => $this->request->getVar('telp'),
			'instansi' => $this->request->getVar('instansi'),
			'alamat' => $this->request->getVar('alamat'),
			'tanggalpeminjaman' => $this->request->getVar('tanggalpeminjaman')

		]);


		return redirect()->to('/pages/pembayaran');
	}


	public function tambahpembayaran()
	{

		// Generate no pembayaran
		$cekPembayaran = $this->TamuModel->countPembayaran() + 1;
		$noPembayaran = 'P' . $cekPembayaran;

		// Input Pembayaran
		$this->TamuModel->tambahDataPembayaran($noPembayaran);



		$this->session->set_flashdata('nomor', $noPembayaran);
	}

	public function tambah_formpesan()
	{

		$data = [
			'title' => 'Tambah Formpesan',
		];
		return view('pages/formpesan', $data);
	}

	public function pembayaran()
	{
		$data['title'] = 'Pembayaran';
		$this->load->view('pages/pembayaran', $data);
	}
}
