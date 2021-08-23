<?php

namespace App\Controllers;

class Pesan extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

    public function create()
    {
        $data = [
            'title' => 'Form Pesan'
        ];
        return view('pages/formpesan', $data);
    }

    public function simpan()
    {
        dd($this->request->getVar());
    }
}