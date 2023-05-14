<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edukasi_stunting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index($id_edukasi = null)
    {
        $data['title'] = "Edukasi Stunting";
        // $edukasi = $this->admin->edukasi($id_edukasi);
        // $data['edukasi'] = $edukasi;
        // $data['edu'] = $this->admin->halamanUpdate('edukasi');
        $where = array('id_edukasi' => $id_edukasi);
        // // $this->load->model('MKegiatanCRUD');
        $data['edu'] = $this->admin->get_edukasi($where, 'edukasi')->result();
        $this->template->load('templates/gudang_dashboard', 'edu/stunting', $data);
    }
}