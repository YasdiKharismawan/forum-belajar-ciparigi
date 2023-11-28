<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller {
    public function index()
    {
        $data['invoice'] = $this->Invoice_model->show_data();
        $data['title'] = 'Invoice Product';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->Invoice_model->getIdInvoice($id_invoice);
        $data['transaksi'] = $this->Invoice_model->getIdTransaksi($id_invoice);

        $data['title'] = 'Detail Invoice';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates/footer');

    }
}