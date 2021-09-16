<?php


namespace App\Controllers;

use App\Models\PesananModel;

class Tamu extends BaseController
{

	protected $pesananModel;
	protected $session;


	public function __construct()
	{
		$this->pesananModel = new PesananModel();
		$this->session = \Config\Services::session();
		$this->session->start();
	}

	public function save_formpesan()
	{
		$DataNoPembayaran = $this->tambahpembayaran();

		$this->pesananModel->save([
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'telp' => $this->request->getVar('telp'),
			'instansi' => $this->request->getVar('instansi'),
			'alamat' => $this->request->getVar('alamat'),
			'tanggalpeminjaman' => $this->request->getVar('tanggalpeminjaman'),
			'no_pembayaran' => $DataNoPembayaran
		]);

		$this->session->setFlashdata('kode', $DataNoPembayaran);
		$page['title'] = "Pembayaran";
		$page['kode'] = $this->session->getFlashdata('kode');
		echo view('/pages/pembayaran', $page);

		//redirect to some function
		// return redirect()->to('/pages/pembayaran');


		//echo in view or controller

	}


	public function tambahpembayaran()
	{

		// Generate no pembayaran
		$cekPembayaran = $this->pesananModel->countPembayaran() + 1;

		$noPembayaran = 'P' . $cekPembayaran;

		// Input Pembayaran
		$this->pesananModel->tambahDataPembayaran($noPembayaran);
		return $noPembayaran;
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
