<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // agar yang tidak punya session tidak bisa masuk lewat url
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Buku_model');
        $this->load->model('Materi_model');
        $data['total_buku'] = $this->Buku_model->countAllBuku();
        $data['total_materi'] = $this->Materi_model->countAllMateri();
        $data['total_user'] = $this->countAllUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function role() 
    {
        $data['title'] = 'Role';  
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();    
        $data['role'] = $this->db->get('user_role')->result_array();    

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }
    
    public function roleAccess($role_id) 
    {
        $data['title'] = 'Role Access';  
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();    
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();   
        
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Access Changed!</div>');
    }

    public function countAllUser()
    {
        $this->load->database(); // Pastikan library database dimuat

        $query = $this->db->get('user');
        if ($query) {
            return $query->num_rows();
        } else {
            log_message('error', 'Database query failed in countAllUser');
            return 0;
        }
    }





    



}