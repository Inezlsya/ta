<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gudang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('User_model', 'user');
    }
    public function index()
    {
        $data['title'] = "Barang";
        $data['barang'] = $this->user->get('kuesioner');
        // print_r($data['barang']);
        $this->template->load('templates/gudang_dashboard', 'gudang/dashboard', $data);
    }
}