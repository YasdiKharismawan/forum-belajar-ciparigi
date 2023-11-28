<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Buku_model');
    }
    public function index()
    {
        $data['title'] = 'Buku Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->Buku_model->getAllBuku();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', ['required' => 'Kolom judul harus diisi!']);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim', ['required' => 'Kolom harga harus diisi!']);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Data Buku';
            $this->load->view('templates/header', $data);
            $this->load->view('buku/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Buku_model->tambahDataBuku();
            $this->session->set_flashdata('success_message', 'Buku Berhasil Ditambah!');
            $this->session->keep_flashdata('message');
            redirect('buku');
        }
    }

    public function hapus($id)
    {
        $this->load->model('Buku_model');
        $this->load->library('form_validation');
        $this->Buku_model->hapusDataBuku($id);
        $this->session->set_flashdata('success_message', 'Buku Berhasil Dihapus!');
        $this->session->keep_flashdata('message');
        redirect('buku');
    }

    public function detail($id)
    {
        $data['title'] = 'Buku Detail';
        $data['buku'] = $this->Buku_model->getBukuById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('buku/detail', $data);
        $this->load->view('templates/footer');
    }


    public function edit($id)
    {
        // Validasi form
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', ['required' => 'Kolom judul harus diisi!']);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim', ['required' => 'Kolom harga harus diisi!']);

        // Mengambil data buku berdasarkan ID
        $data['title'] = 'Edit Buku';
        $data['buku'] = $this->Buku_model->getBukuById($id);
        $data['kelas'] = ['1', '2', '3', '4', '5', '6'];

        if ($this->form_validation->run() == FALSE) {
            // Tampilkan halaman edit dengan form dan data buku
            $this->load->view('templates/header', $data);
            $this->load->view('buku/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_image = $_FILES['cover']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '3072';
                $config['upload_path'] = './assets/img/buku/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('cover')) {

                    $new_cover = $this->upload->data('file_name');
                    $this->Buku_model->editDataBukuWithCover($id, $new_cover, $this->input->post('judul'), $this->input->post('kelas'), $this->input->post('harga'));
                } else {
                    echo $this->upload->display_errors();
                    return; // Menghentikan eksekusi jika terjadi kesalahan pada upload gambar
                }
            } else {
                // Update data buku tanpa mengubah gambar
                $this->Buku_model->editDataBuku($id, $this->input->post('judul'), $this->input->post('kelas'), $this->input->post('harga'));
            }

            $this->session->set_flashdata('success_message', 'Buku Berhasil Diedit!');
            $this->session->keep_flashdata('message');
            redirect('buku');
        }
    }



    public function addtocart($id)
    {
        $buku = $this->Buku_model->find($id);
        $data = array(
            'id'      => $buku->id,
            'qty'     => 1,
            'price'   => $buku->harga,
            'name'    => $buku->judul,
        );

        $this->cart->insert($data);
        redirect('user/beli_buku');
    }

    public function detail_cart()
    {
        $data['title'] = 'Detail Cart';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->Buku_model->getAllBuku();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('buku/cart');
        $this->load->view('templates/footer');
    }

    public function delcart()
    {
        $this->cart->destroy();
        redirect('user/beli_buku');
    }

    public function pay()
    {
        $data['title'] = 'Halaman Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('buku/pay');
        $this->load->view('templates/footer');
    }

    public function payproses()
    {
        $data['title'] = 'Halaman Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $is_processed = $this->Invoice_model->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('buku/payproses');
            $this->load->view('templates/footer');
        } else {
            echo "sorry, your order failed to process!!!";
        }
    }

    public function detail_buku($id)
    {
        $data['buku'] = $this->Buku_model->detail_buku($id);
        $data['title'] = 'Detail Buku';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('buku/buku_detail', $data);
        $this->load->view('templates/footer');
    }
}
