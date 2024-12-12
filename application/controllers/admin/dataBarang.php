<?php


class DataBarang extends CI_Controller {

    public function index() {
        $data['barang'] = $this->modelBarang->showData()->result();
		$this->load->view('templatesAdmin/header');
		$this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/DataBarang', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function insert() {
        
        $nama_barang = $this->input->post('nama_barang');
		$keterangan = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		$gambar = $_FILES['gambar']['name'];
		if ($gambar = ''){}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';
	
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gagal Upload";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}

        $max_id = $this->modelBarang->get_max_id('data_barang');
        $id_barang = $max_id + 1;
	
		$data = array(
			'nama_barang' => $nama_barang,
			'keterangan' => $keterangan,
			'kategori' => $kategori,
			'stok' => $stok,
			'harga' => $harga,
			'gambar' => $gambar
		);
		$this->modelBarang->insertData($data, 'data_barang');
		redirect('admin/DataBarang');
    }

    public function edit($id) {

        $where = array('id_barang' => $id);
        $data['barang'] = $this->modelBarang->editData($where, 'data_barang')->result();
        $this->load->view('templatesAdmin/header');
		$this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/editBarang', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function update() {
        $id_barang = $this->input->post('id_barang');
        $nama_barang = $this->input->post('nama_barang');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');

        $data = array (
            'nama_barang' => $nama_barang,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'stok' => $stok,
            'harga' => $harga
        );

        $where = array (
            'id_barang' => $id_barang
        );

        $this->modelBarang->updateData($where, $data, 'data_barang');
        return redirect('admin/DataBarang');
    }

    public function delete($id) {
        $where = array('id_barang' => $id);
        $this->modelBarang->deleteData($where, 'data_barang');
        return redirect('admin/DataBarang');
    }
}