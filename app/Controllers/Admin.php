<?php


namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{

	protected $userModel;

	public function __construct()
	{
		$this->userModel = new UserModel();
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
}
