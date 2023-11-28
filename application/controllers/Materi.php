<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Materi_model');

    }
    public function index()
    {
        $data['title'] = 'Materi Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getAllMateri();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('materi/index', $data);
        $this->load->view('templates/footer');
    }

   
    public function tambah()
    {
        $this->form_validation->set_rules('mapel', 'Mapel', 'required|trim', ['required' => 'Kolom mapel harus diisi!']);
        $this->form_validation->set_rules('topik', 'Topik', 'required|trim');
        $this->form_validation->set_rules('link', 'Link', 'required|trim', ['required' => 'Kolom link harus diisi!']);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Data Materi';
            $this->load->view('templates/header', $data);
            $this->load->view('materi/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Materi_model->tambahDataMateri();
            $this->session->set_flashdata('success_message', 'Materi Berhasil Ditambah!');
            $this->session->keep_flashdata('message');
            redirect('materi');
        }
    }

    public function hapus($id)
    {
        $this->load->model('Materi_model');
        $this->load->library('form_validation');
        $this->Materi_model->hapusDataMateri($id);
        $this->session->set_flashdata('success_message', 'Materi Berhasil Dihapus!');
        $this->session->keep_flashdata('message');
        redirect('materi');
    }

    public function detail($id)
    {
        $data['title'] = 'Materi Detail';
        $data['materi'] = $this->Materi_model->getMateriById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('materi/detail', $data);
        $this->load->view('templates/footer');
    }


    public function edit($id)
    {
        // Validasi form
        $this->form_validation->set_rules('mapel', 'Mapel', 'required|trim', ['required' => 'Kolom mapel harus diisi!']);
        $this->form_validation->set_rules('topik', 'Topik', 'required|trim');
        $this->form_validation->set_rules('link', 'Link', 'required|trim', ['required' => 'Kolom link harus diisi!']);

        // Mengambil data Materi berdasarkan ID
        $data['title'] = 'Edit Materi';
        $data['materi'] = $this->Materi_model->getMateriById($id);
        $data['kd_mapel'] = ['IA', 'TE', 'IS', 'PK', 'BI', 'SB', 'MT','SN','PA','PJ'];
        $data['kd_kelas'] = ['001', '002', '003', '004', '005', '006'];
        $data['kelas'] = ['1', '2', '3', '4', '5', '6'];
        $data['mapel'] = ['Matematika', 'Ilmu Pengetahuan Alam', 'Tematik', 'Bahasa Indonesia', 'Bahasa Inggris', 'Pendidikan Agama Islam', 'Ilmu Pengetahuan Sosial'];

        if ($this->form_validation->run() == FALSE) {
            // Tampilkan halaman edit dengan form dan data materi
            $this->load->view('templates/header', $data);
            $this->load->view('materi/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_image = $_FILES['cover']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '3072';
                $config['upload_path'] = './assets/img/materi/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('cover')) {

                    $new_cover = $this->upload->data('file_name');
                    $this->Materi_model->editDataMateriWithCover($id, $new_cover, $this->input->post('kd_mapel'), $this->input->post('kd_kelas'), $this->input->post('mapel'), $this->input->post('kelas'), $this->input->post('topik'), $this->input->post('detail'), $this->input->post('link'));
                } else {
                    echo $this->upload->display_errors();
                    return; // Menghentikan eksekusi jika terjadi kesalahan pada upload gambar
                }
            } else {
                // Update data materi tanpa mengubah gambar
                $this->Materi_model->editDataMateri($id,$this->input->post('kd_mapel'), $this->input->post('kd_kelas'), $this->input->post('mapel'), $this->input->post('kelas'),  $this->input->post('topik'), $this->input->post('detail'), $this->input->post('link'));
            }

            $this->session->set_flashdata('success_message', 'Materi Berhasil Diedit!');
            $this->session->keep_flashdata('message');
            redirect('materi');
        }
    }   
    public function detail_materi($id)
    {
        $data['materi'] = $this->Materi_model->detail_materi($id);
        $data['title'] = 'Detail Materi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('materi/detail_materi', $data);
        $this->load->view('templates/footer');
    }
}
