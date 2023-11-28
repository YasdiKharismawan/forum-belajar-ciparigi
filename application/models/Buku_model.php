<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllBuku()
    {
        // cara chaining
        return $query = $this->db->get('buku')->result_array();
    }

    public function tambahDataBuku()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "kelas" => $this->input->post('kelas', true),
            "harga" => $this->input->post('harga', true),
            "cover" => 'default.jpg'
        ];
        $this->db->insert('buku', $data);
    }

    public function hapusDataBuku($id)
    {
        //$this->db->where('id', $id);
        $this->db->delete('buku', ['id' => $id]);
    }


    public function editDataBuku($id, $judul, $kelas, $harga)
    {
        $data = array(
            'judul' => $judul,
            'kelas' => $kelas,
            'harga' => $harga
        );

        $this->db->where('id', $id);
        $this->db->update('buku', $data);
    }

    public function editDataBukuWithCover($id, $new_cover, $judul, $kelas, $harga)
    {
        $data = array(
            'judul' => $judul,
            'kelas' => $kelas,
            'harga' => $harga,
            'cover' => $new_cover
        );

        $this->db->where('id', $id);
        $this->db->update('buku', $data);
    }

    public function getBukuById($id)
    {
        return $this->db->get_where('buku', ['id' => $id])->row_array();
    }




    public function cariDataBuku()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        $this->db->or_like('kelas', $keyword);
        return $this->db->get('buku')->result_array();
    }

    public function getBukuPagination($limit, $start)
    {
        return $this->db->get('buku', $limit, $start)->result_array();
    }

    public function countAllBuku()
    {
        $query = $this->db->get('buku');
        if ($query) {
            return $query->num_rows();
        } else {
            log_message('error', 'Database query failed in countAllBuku');
            return 0;
        }
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)->limit(1)->get('buku');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_buku($id)
    {
        $result = $this->db->where('id', $id)->get('buku');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }
}
