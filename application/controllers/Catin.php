<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catin extends CI_Controller
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
        $data['title'] = "Catin";
        $data['catin'] = $this->admin->get('catin');
        $this->template->load('templates/dashboard', 'catin/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('nama_catin', 'Nama  Catin', 'required|trim|alpha');
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required|trim|min_length[10]|numeric');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('status', ' Status', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
    }

    public function add()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Catin";
            $this->template->load('templates/dashboard', 'catin/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('catin', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('catin');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('catin/add');
            }
        }
    }


    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Catin";
            $data['catin'] = $this->admin->get('catin', ['id_catin' => $id]);
            $this->template->load('templates/dashboard', 'catin/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('catin', 'id_catin', $id, $input);

            if ($update) {
                set_pesan('data berhasil diedit.');
                redirect('catin');
            } else {
                set_pesan('data gagal diedit.');
                redirect('catin/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('catin', 'id_catin', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('catin');
    }
}
