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
		$noPembayaran = $this->tambahpembayaran();
		// $DataBukti = $this->upload_bukti();


		$this->pesananModel->save([
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'telp' => $this->request->getVar('telp'),
			'instansi' => $this->request->getVar('instansi'),
			'alamat' => $this->request->getVar('alamat'),
			'tanggalpeminjaman' => $this->request->getVar('tanggalpeminjaman'),
			'no_pembayaran' => $noPembayaran,
			'bukti' => $this->request->getVar('bukti')
			// 'bukti' => $DataBukti
		]);

		$this->session->setFlashdata('kode', $noPembayaran);
		$page['title'] = "Pembayaran";
		$page['kode'] = $this->session->getFlashdata('kode');
		echo view('/pages/pembayaran', $page);

		// $pages['title'] = "Upload Bukti";
		// echo view('pages', $pages);

		//redirect to some function
		// return redirect()->to('/pages/pembayaran');



		//echo in view or controller


	}

	public function upload_bukti()
	{
		// $data = [
		// 	'title' => 'upload Bukti',
		// 	'error' => $this->validation
		// ];
		// return view('pages/pembayaran', $data);


		// $rule = [
		// 	'images' => [
		// 		'rules' => 'uploaded[images]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/gif,image/png]|max_size[images,2048]',
		// 		'errors' => [
		// 			'uploaded' => 'Harus Ada File yang diupload',
		// 			'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
		// 			'max_size' => 'Ukuran File Maksimal 2 MB'
		// 		]
		// 	]

		// ];

		// if (!$this->validate($rule)) {
		// 	return redirect()->to('/tamu/upload_bukti')->withInput();
		// }



		// $images = $this->request->getFile('images');

		if (!$this->validate([

			'images' => [
				'rules' => 'uploaded[images]|mime_in[images,image/jpg,image/jpeg,image/gif,image/png]|max_size[bukti,2048]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
					'max_size' => 'Ukuran File Maksimal 2 MB'
				]

			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
		$bukti = new PesananModel();
		$DataBukti = $this->request->getFile('images');
		$fileName = $DataBukti->getRandomName();
		$bukti->insert([
			'bukti' => $fileName
		]);
		$DataBukti->move('img/', $fileName);
		session()->setFlashdata('success', 'Bukti Berhasil diupload');
		// $this->pesananModel->uploadBuktiPembayaran($DataBukti);
		return redirect()->to(base_url('pages'));
	}


	public function tambahpembayaran()
	{

		// Generate no pembayaran
		$cekPembayaran = $this->pesananModel->countPembayaran() + 1;

		$noPembayaran = 'P' . $cekPembayaran;

		// // Input Pembayaran
		// $this->pesananModel->tambahDataPembayaran($noPembayaran);
		return $noPembayaran;
	}

	// public function tambah_formpesan()
	// {

	// 	$data = [
	// 		'title' => 'Tambah Formpesan',
	// 	];
	// 	return view('pages/formpesan', $data);
	// }

	public function pembayaran()
	{
		$data = [
			'title' => 'Pembayaran',
		];
		return redirect('pages/pembayaran', $data);
	}



	// public function create()
	// {
	// 	return view('pages/pembayaran');
	// }
}
