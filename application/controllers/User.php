<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    // agar yang tidak punya session tidak bisa masuk lewat url
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Materi_model');
        $this->load->model('Buku_model');
    }

    public function index() 
    {
        $data['title'] = 'My Profile';  
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function edit() 
    {
        $data['title'] = 'Edit Profile';  
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();       
        
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        
        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // Cek jika ada gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];

            if($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')) {

                    $old_image = $data['user']['image'];
                    if($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }

            }

            
            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your profile has been updated!</div>');
            redirect('user');
        }

    }


    public function materi()
    {
        $data['title'] = 'List Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->db->get('materi')->result_array();

        // PAGINATION
        $config['base_url'] = 'http://localhost/sys-login/user/materi';
        $config['total_rows'] = $this->Materi_model->countAllMateri();
        $config['per_page'] = 4;
        $config['num_links'] = 4;

        // STYLING
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        // Initialize
        $this->pagination->initialize($config);



        $data['start'] = $this->uri->segment(3);
        $data['materi'] = $this->Materi_model->getMateriPagination($config['per_page'], $data['start']);

        if ($this->input->post('keyword')) {
            $this->load->model('Materi_model');
            $data['materi'] = $this->Materi_model->cariDataMateri();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/materi', $data);
        $this->load->view('templates/footer');
    }

    public function beli_buku()
    {
        $data['title'] = 'Daftar Buku';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->db->get('buku')->result_array();

        // PAGINATION
        $config['base_url'] = 'http://localhost/sys-login/user/beli_buku';
        $config['total_rows'] = $this->Buku_model->countAllBuku();
        $config['per_page'] = 4;
        $config['num_links'] = 4;

        // STYLING
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        // Initialize
        $this->pagination->initialize($config);



        $data['start'] = $this->uri->segment(3);
        $data['buku'] = $this->Buku_model->getBukuPagination($config['per_page'], $data['start']);

        if ($this->input->post('keyword')) {
            $this->load->model('Buku_model');
            $data['buku'] = $this->Buku_model->cariDataBuku();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/beli_buku', $data);
        $this->load->view('templates/footer');
    }

    public function home()
    {
        $data['title'] = 'Home Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/home', $data);
        $this->load->view('templates/footer');
    }

}