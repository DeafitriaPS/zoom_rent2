<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Sewa Zoom RadNet'
		];
		return view('pages/home', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About Us'
		];
		return view('pages/about', $data);
	}

	public function contact()
	{
		$data = [
			'title' => 'Contact Me'
		];
		return view('pages/contact', $data);
	}

	public function formpesan()
	{
		$data = [
			'title' => 'Form Pesan'
		];
		return view('pages/formpesan', $data);
	}

	public function formpesan2()
	{
		$data = [
			'title' => 'Form Pesan'
		];
		return view('pages/formpesan2', $data);
	}

	public function pembayaran()
	{
		$data = [
			'title' => 'Pembayaran'
		];
		return view('pages/pembayaran', $data);
	}

	public function dashboard()
	{
		$data = [
			'title' => 'Login Admin'
		];
		return view('pages/admin/dashboard', $data);
	}

	public function login()
	{
		$data = [
			'title' => 'Loginadmin'
		];
		return view('pages/admin/dashboard', $data);
	}

	public function datapesanan()
	{
		$data = [
			'title' => 'Data Pesanan'
		];
		return view('pages/admin/datapesanan', $data);
	}
}
