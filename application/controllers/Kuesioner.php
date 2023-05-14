<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuesioner extends CI_Controller
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
        $data['barang'] = $this->admin->get('kuesioner');
        // print_r($data['barang']);
        $this->template->load('templates/dashboard', 'kuesioner/data', $data);
    }

    // public function index()
    
    // {
    //     $this->load->model('admin_model');
    //     $data['title'] = "Kuesioner";
    //     $data['barang'] = $this->admin_model->getBarang();
    //     // print_r($data['barang']);
    //     $this->template->load('templates/dashboard', 'barang/data', $data);
    // }

    // public function nonatk()
    // {
    //     $data['title'] = "Barang";
    //     $data['barang'] = $this->admin->getBarangnonatk();
    //     // print_r($data['barang']);
    //     $this->template->load('templates/dashboard', 'barang/non_atk/data_nonatk', $data);
    // }

    private function _validasi()
    {
        // $this->form_validation->set_rules('id_kuesioner', 'Kode Barang', 'required|trim|max_length[4]|numeric');
        $this->form_validation->set_rules('nama_catin', 'Nama Barang', 'required|trim');
        $this->form_validation->set_rules('usia', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('lingkar_perut', 'Nama Satuan', 'required|trim');
        $this->form_validation->set_rules('lingkar_lengan', 'Type Barang', 'trim|alpha');
        $this->form_validation->set_rules('berat_badan', 'Warna Barang', 'required');
        $this->form_validation->set_rules('tinggi_badan', 'Ukuran Barang', 'required');
        $this->form_validation->set_rules('kadar_hb', 'Berat Barang', 'required|trim');
        $this->form_validation->set_rules('perilaku_merokok', 'Merk Barang', 'trim');
        
    }
    // Tambah Barang atk
    public function add()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Kuesioner";
            $this->template->load('templates/dashboard', 'kuesioner/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('kuesioner', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('kuesioner');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('kuesioner/add');
            }
        }
    }
    public function addatk()
    {
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "ATK";
            $data['jenis'] = $this->admin->get('jenis');

            // Mengenerate ID Barang
            $kode_terakhir = $this->admin->getMax('kuesioner', 'id_kuesioner');
            $kode_tambah = substr($kode_terakhir, -6, 6);
            $kode_tambah++;
            $number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
            $data['id_kuesioner'] = 'B' . $number;

            // $data['kode_barang'] = $number;
            // $kode = $this->admin->getMax('barang', 'kode_barang');
            // $count = mysqli_num_rows($kode);

            $this->template->load('templates/dashboard', 'kuesioner/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $insert = $this->admin->insert('barang', $input);

            if ($insert) {
                set_pesan('data berhasil disimpan');
                redirect('kueisoner');
            } else {
                set_pesan('gagal menyimpan data');
                redirect('kueisoner/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Kuesioner";
           
            $data['barang'] = $this->admin->get('kuesioner', ['id_kuesioner' => $id]);
            $this->template->load('templates/dashboard', 'barang/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('kuesioner', 'id_kuesioner', $id, $input);

            if ($update) {
                set_pesan('data berhasil disimpan');
                redirect('barang');
            } else {
                set_pesan('gagal menyimpan data');
                redirect('barang/edit/' . $id);
            }
        }
    }

    // edit ATK
    // public function editatk($getId)
    // {
    //     $id = encode_php_tags($getId);
    //     $this->_validasi();

    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = "Barang";
    //         $data['jenis'] = $this->admin->get('atk');
    //         $data['barang'] = $this->admin->get('barang', ['id_kuesioner' => $id]);
    //         $this->template->load('templates/dashboard', 'barang/atk/editatk', $data);
    //     } else {
    //         $input = $this->input->post(null, true);
    //         $update = $this->admin->update('barang', 'id_kuesioner', $id, $input);

    //         if ($update) {
    //             set_pesan('data berhasil disimpan');
    //             redirect('barang');
    //         } else {
    //             set_pesan('gagal menyimpan data');
    //             redirect('barang/atk/editatk/' . $id);
    //         }
    //     }
    // }

    // delete barang ATK
    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('kuesioner', 'id_kuesioner', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('barang');
    }

    // delete barang non atk

    public function getstok($getId)
    {
        $id = encode_php_tags($getId);
        $query = $this->admin->cekStok($id);
        output_json($query);
    }
}
