<?php


namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PesananModel;

class Admin extends BaseController
{

	protected $userModel;
	protected $pesananModel;

	public function __construct()
	{
		$this->userModel = new UserModel();
		$this->pesananModel = new PesananModel();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		if (session()->get('admin') == '') {
			session()->setFlashdata('warning', 'Anda Belum Login');
			return redirect()->to(base_url('login'));
		}

		$data = [
			'title' => 'Dashboard',

		];
		return view('pages/admin/dashboard', $data);
	}

	public function datapesanan()
	{
		if (session()->get('admin') == '') {
			session()->setFlashdata('warning', 'Anda Belum Login');
			return redirect()->to(base_url('login'));
		}

		$datapesanan = $this->AdminModel->findAll();
		$data = [
			'title' => 'List Barang',
			'barang' => $datapesanan
		];
		return view('pages/admin/datapesanan', $data);
	}
}
