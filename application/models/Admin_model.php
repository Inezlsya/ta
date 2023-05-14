<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }
    public function get_datastunting($id_edukasi = null) {
        return $this->db->get_where("edukasi", array('deskripsi' => $this->session->userdata('deskripsi')));

        
      }
    public function halamanUpdate($where, $table) {
        return $this->db->get_where($table, $where);
    }
    
    
    public function update($table, $pk, $id, $data)
    {
        $this->db->where($pk, $id);
        return $this->db->update($table, $data);
    }

    public function insert($table, $data, $batch = false)
    {
        return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
    }

    public function delete($table, $pk, $id)
    {
        return $this->db->delete($table, [$pk => $id]);
    }

    public function getUsers($id)
    {
        /**
         * ID disini adalah untuk data yang tidak ingin ditampilkan. 
         * Maksud saya disini adalah 
         * tidak ingin menampilkan data user yang digunakan, 
         * pada managemen data user
         */
        $this->db->where('id_user !=', $id);
        return $this->db->get('user')->result_array();
    }
    public function get_edukasi($deskripsiS = null) {
        return $this->db->get_where("edukasi", array('deskripsi' => $this->session->userdata('deskripsi')));
        
      }

    public function getBarang()
    {
        // return $this->db->get_where("barang");
        // $this->db->where('id_kuesioner !=', $id);
        return $this->db->get('kuesioner')->result_array();
    }

    // public function getBarang()
    // {
    //     $this->db->join('atk j', 'b.jenis_id = j.id_atk');
    //     $this->db->order_by('id_kuesioner');
    //     return $this->db->get('barang b')->result_array();
    // }
    // public function getBarangnonatk()
    // {
    //     $this->db->join('non_atk j', 'b.jenis_id = j.id_nonatk');
    //     $this->db->order_by('id_kuesioner');
    //     return $this->db->get('barang_nonatk b')->result_array();
    // }

    // public function getBarangMasuk($limit = null, $id_kuesioner = null, $range = null)
    // {
        // return $this->db->get('konsultasi')->result_array();
        // $this->db->select('*');
        // $this->db->join('user u', 'bm.user_id = u.id_user');
        // $this->db->join('supplier sp', 'bm.supplier_id = sp.id_catin');
        // $this->db->join('barang b', 'bm.barang_id = b.id_kuesioner');
        // if ($limit != null) {
        //     $this->db->limit($limit);
        // }

        // if ($id_kuesioner != null) {
        //     $this->db->where('id_kuesioner', $id_kuesioner);
        // }

        // if ($range != null) {
        //     $this->db->where('tanggal_masuk' . ' >=', $range['mulai']);
        //     $this->db->where('tanggal_masuk' . ' <=', $range['akhir']);
        // }

        // $this->db->order_by('id_konsultasi', 'DESC');
    //     // return $this->db->get('konsultasi bm')->result_array();
    // }

    // public function getBarangKeluar($limit = null, $id_kuesioner = null, $range = null)
    // {
    //     $this->db->select('*');
    //     $this->db->join('user u', 'bk.user_id = u.id_user');
    //     $this->db->join('barang b', 'bk.barang_id = b.id_kuesioner');
    //     if ($limit != null) {
    //         $this->db->limit($limit);
    //     }
    //     if ($id_kuesioner != null) {
    //         $this->db->where('id_kuesioner', $id_kuesioner);
    //     }
    //     if ($range != null) {
    //         $this->db->where('tanggal_keluar' . ' >=', $range['mulai']);
    //         $this->db->where('tanggal_keluar' . ' <=', $range['akhir']);
    //     }
    //     $this->db->order_by('id_barang_keluar', 'DESC');
    //     return $this->db->get('barang_keluar bk')->result_array();
    // }

    public function getMax($table, $field, $kode = null)
    {
        $this->db->select_max($field);
        if ($kode != null) {
            $this->db->like($field, $kode, 'after');
        }
        return $this->db->get($table)->row_array()[$field];
    }

    public function getMaxCountKodebarang($table, $field, $kode = null)
    {
        $this->db->select_max($field);

        if ($kode != null) {
            $this->db->like($field, $kode, 'after');
        }
        return $this->db->get($table)->row_array()[$field];
    }

    public function count($table)
    {
        return $this->db->count_all($table);
    }

    public function sum($table, $field)
    {
        $this->db->select_sum($field);
        return $this->db->get($table)->row_array()[$field];
    }

    public function min($table, $field, $min)
    {
        $field = $field . ' <=';
        $this->db->where($field, $min);
        return $this->db->get($table)->result_array();
    }

    // public function chartBarangMasuk($bulan)
    // {
    //     $like = 'T-BM-' . date('y') . $bulan;
    //     $this->db->like('id_konsultasi', $like, 'after');
    //     return count($this->db->get('konsultasi')->result_array());
    // }

    // public function chartBarangKeluar($bulan)
    // {
    //     $like = 'T-BK-' . date('y') . $bulan;
    //     $this->db->like('id_barang_keluar', $like, 'after');
    //     return count($this->db->get('barang_keluar')->result_array());
    // }

    public function laporan($table, $mulai, $akhir)
    {
        $tgl = $table == 'barang_masuk' ? 'tanggal_masuk' : 'tanggal_keluar';
        $this->db->where($tgl . ' >=', $mulai);
        $this->db->where($tgl . ' <=', $akhir);
        return $this->db->get($table)->result_array();
    }

    // public function cekStok($id)
    // {
    //     return $this->db->get_where('barang b', ['id_kuesioner' => $id])->row_array();
    // }
    
public function index()
{
    
    $this->db->select('deskripsi');
    $query = $this->db->get('edukasi', array('kategori'=>'edukasi stunting'));
    echo "<pre>";
    print_r($query->result());
    echo "</pre>";

}
}
