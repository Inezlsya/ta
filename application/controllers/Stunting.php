<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stunting extends CI_Controller
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
        $data['jenis'] = $this->admin->get('edukasi');
        $this->template->load('templates/catin_dashboard', 'kuesioner/stunting', $data);
    }
}