<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->LoginModel = new LoginModel();
	}

	public function index()
	{
		return view('login');
	}

	public function cek_login()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		$cek = $this->LoginModel->cek_login($username, $password);

		if (isset($cek['username']) && isset($cek['password'])) {
			session()->set('admin', $cek['username']);
			session()->set('nama', $cek['nama']);
			return redirect()->to(base_url('admin'));
		} else {
			session()->setFlashdata('warning', 'Username dan Password Salah');
			return redirect()->to(base_url('login'));
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('login'));
	}
}
