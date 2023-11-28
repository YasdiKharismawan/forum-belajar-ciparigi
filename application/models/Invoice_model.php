<?php

class Invoice_model extends CI_Model {
    public function index() {
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('name');
        $alamat = $this->input->post('address');
        
        $invoice = array (
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y')))
        );
        $this->db->insert('invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach($this->cart->contents() as $item) {
            $data = array (
                'id_invoice' => $id_invoice,
                'id_game' => $item['id'],
                'nama_game' => $item['name'],
                'jumlah' => $item['qty'],
                 'harga' => $item['price']
            );
            $this->db->insert('transaksi', $data);
        }
        return true;
    }

    public function show_data()
    {
        $result = $this->db->get('invoice');
        if($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function getIdInvoice($id_invoice)
    {
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('invoice');
        if($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function getIdTransaksi($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get('transaksi');
        if($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}