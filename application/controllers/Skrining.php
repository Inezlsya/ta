<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skrining extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Kuesioner";
        $data['jenis'] = $this->admin->get('jenis');
        $this->template->load('templates/gudang_dashboard', 'kuesioner/skrining', $data);
    }
}