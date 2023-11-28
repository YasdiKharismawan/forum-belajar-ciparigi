<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Game_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function getAllGames() 
     {
        // cara chaining
        return $query = $this->db->get('game')->result_array();
     }

     public function tambahDataGame() {
        $data = [
            "judul" => $this->input->post('judul', true),
            "genre" => $this->input->post('genre', true),
            "harga" => $this->input->post('harga', true),
            "detail" => $this->input->post('detail', true),
            "cover" => 'default.jpg'
        ];
        $this->db->insert('game', $data);
     }

     public function hapusDataGame($id)
     {
        //$this->db->where('id', $id);
        $this->db->delete('game', ['id' => $id]);
     }

     
   public function editDataGame($id, $judul, $genre, $harga, $detail)
{
    $data = array(
        'judul' => $judul,
        'genre' => $genre,
        'harga' => $harga,
        'detail' => $detail
    );

    $this->db->where('id', $id);
    $this->db->update('game', $data);
}

   public function editDataGameWithCover($id, $new_cover, $judul, $genre, $harga, $detail)
   {
      $data = array(
         'judul' => $judul,
         'genre' => $genre,
         'harga' => $harga,
         'detail' => $detail,
         'cover' => $new_cover
      );

      $this->db->where('id', $id);
      $this->db->update('game', $data);
   }

   public function getGameById($id)
   {
       return $this->db->get_where('game', ['id' => $id])->row_array();
   }




   public function cariDataGame()
   {
      $keyword = $this->input->post('keyword', true);
      $this->db->like('judul', $keyword);
      $this->db->or_like('genre', $keyword);
      return $this->db->get('game')->result_array();
   }

   public function getGamePagination($limit, $start)
   {
      return $this->db->get('game', $limit, $start)->result_array();
   }

   public function countAllGames()
   {
      return $this->db->get('game')->num_rows();
   }

   public function find($id)
   {
      $result = $this->db->where('id', $id)->limit(1)->get('game');
      if($result->num_rows() > 0) {
         return $result->row();
      } else {
         return array();
      }
   }

   public function detail_game($id)
   {
      $result = $this->db->where('id', $id)->get('game');
      if ($result->num_rows() > 0) {
         return $result->result_array();
      } else {
         return false;
      }
   }

     
}

