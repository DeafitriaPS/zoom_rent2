<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $this->load->view('email', $data);
    }

    public function SendMail()
    {
        if (isset($_POST['submit_email'])) {

            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $pesan = $this->input->post('pesan');

            if (!empty($email)) {

                // configuration to email & process

                $config = [
                    'mailtype' => 'text',
                    'charset' => 'iso-8859-1',
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_user' => 'nama_email.gmail',
                    'smtp_pass' => 'xxx',
                    'smtp_port' => 465,

                ];

                $this->load->library('email', $config);
                $this->email->initialize($config);
                // end config

                $this->email->from('emailform');
                $this->email->from('emailform');
                $this->email->to($email);
                $this->email->message($pesan);

                if ($this->email->send()) {
                    echo "Pesan berhasil dikirim..";
                } else {
                    show_error($this->email->print_debugger());
                }
            }
        }
    }
}
