<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edu extends CI_Controller
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
        $data['title'] = "Kategori Edukasi";
        $data['edu'] = $this->admin->get('edukasi');
        $this->template->load('templates/dashboard', 'edu/data', $data);
    }

    // Validasi Edit
    private function validasie()
    {
        $this->form_validation->set_rules('kategori', 'Kategori Edukasi', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
    }


    // validasi atk
    private function _validasi()
    {
        $this->form_validation->set_rules('kategori', 'Kategori Edukasi', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
    }

    // validasi non atk
    private function validasi()
    {
        $this->form_validation->set_rules('kategori', 'Kategori Edukasi', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
    }

    // Tambah ATK
    public function add()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Edukasi";
            $this->template->load('templates/dashboard', 'edu/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('edukasi', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('edu');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('edu/add');
            }
        }
    }


    // Edit Edukasi
    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edukasi";
            $data['edukasi'] = $this->admin->get('edukasi', ['id_edukasi' => $id]);
            $this->template->load('templates/dashboard', 'edu/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('edukasi', 'id_edukasi', $id, $input);

            if ($update) {
                set_pesan('data berhasil diedit.');
                redirect('edu');
            } else {
                set_pesan('data gagal diedit.');
                redirect('edu/edit' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('edukasi', 'id_edukasi', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('edu');
    }
}
