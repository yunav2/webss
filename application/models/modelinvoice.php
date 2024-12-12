<?php

class Modelinvoice extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama 	= $this->input->post('nama');
		$alamat = $this->input->post('alamat');

		$invoice = array(
			'nama'			=> $nama,
			'alamat'		=> $alamat,
			'tanggal_pesan'		=> date('Y-m-d H:i:s'),
			'batas_bayar' 	=> date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
		);
		$this->db->insert('invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice'	=> $id_invoice,
				'id_barang'		=> $item['id'],
				'nama_barang'		=> $item['name'],
				'jumlah'		=> $item['qty'],
				'harga'			=> $item['price']
			);
			$this->db->insert('tabel_pesanan', $data);
		}

		return TRUE;
	}

	public function showData()
	{
		$result = $this->db->get('invoice');
		if ($result->num_rows() > 0) {
			return $result->result();
		}else{
			return false;
		}
	}

	public function getidInvoice($id_invoice)
	{
		$result = $this->db->where('id', $id_invoice)->limit(1)->get('invoice');
		if($result->num_rows() > 0){
			return $result->row();
		}else {
			return false;
		}
	}

	public function getidPesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('tabel_pesanan');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
    }
}
?>