<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllMateri()
    {
        // cara chaining
        return $query = $this->db->get('materi')->result_array();
    }

    public function tambahDataMateri()
    {
        $data = [
            "kd_mapel" => $this->input->post('kd_mapel', true),
            "kd_kelas" => $this->input->post('kd_kelas', true),
            "mapel" => $this->input->post('mapel', true),
            "kelas" => $this->input->post('kelas', true),
            "topik" => $this->input->post('topik', true),
            "detail" => $this->input->post('detail', true),
            "link" => $this->input->post('link', true),
            "cover" => 'default.jpg'
        ];
        $this->db->insert('materi', $data);
    }

    public function hapusDataMateri($id)
    {
        //$this->db->where('id', $id);
        $this->db->delete('materi', ['id' => $id]);
    }


    public function editDataMateri($id, $kd_mapel, $kd_kelas, $mapel, $kelas, $topik, $detail, $link)
    {
        $data = array(
            'kd_mapel' => $kd_mapel,
            'kd_kelas' => $kd_kelas,
            'mapel' => $mapel,
            'kelas' => $kelas,
            'topik' => $topik,
            'detail' => $detail,
            'link' => $link
        );

        $this->db->where('id', $id);
        $this->db->update('materi', $data);
    }

    public function editDataMateriWithCover($id, $new_cover, $kd_mapel, $kd_kelas, $mapel, $kelas, $topik, $detail, $link)
    {
        $data = array(
            'kd_mapel' => $kd_mapel,
            'kd_kelas' => $kd_kelas,
            'mapel' => $mapel,
            'kelas' => $kelas,
            'topik' => $topik,
            'detail' => $detail,
            'link' => $link,
            'cover' => $new_cover
        );

        $this->db->where('id', $id);
        $this->db->update('materi', $data);
    }

    public function getMateriById($id)
    {
        return $this->db->get_where('materi', ['id' => $id])->row_array();
    }




    public function cariDataMateri()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('mapel', $keyword);
        $this->db->or_like('kelas', $keyword);
        $this->db->or_like('kd_mapel', $keyword);
        $this->db->or_like('kd_kelas', $keyword);
        $this->db->or_like('topik', $keyword);
        return $this->db->get('materi')->result_array();
    }

    public function getMateriPagination($limit, $start)
    {
        return $this->db->get('materi', $limit, $start)->result_array();
    }

   public function countAllMateri()
{
    $query = $this->db->get('materi');
    if ($query) {
        return $query->num_rows();
    } else {
        log_message('error', 'Database query failed in countAllMateri');
        return 0;
    }
}


    public function find($id)
    {
        $result = $this->db->where('id', $id)->limit(1)->get('materi');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_materi($id)
    {
        $result = $this->db->where('id', $id)->get('materi');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }
}
