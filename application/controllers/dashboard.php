<?php

class Dashboard extends CI_Controller {
    public function index() {
        $data['barang'] = $this -> modelBarang -> showData() -> result();
        $this -> load -> view('templates/header');
        $this -> load -> view('templates/sidebar');
        $this -> load -> view('dashboard', $data);
        $this -> load -> view('templates/footer');
    }

    public function addCart($id){
		$barang = $this->modelBarang->find($id);

		$data = array(
        'id'      => $barang->id_barang,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama_barang
	);

		$this->cart->insert($data);
		redirect('dashboard');
	}

    public function detailCart() {
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('cart');
		$this->load->view('templates/footer');
	}

    public function detail($id_barang){
		$data['barang'] = $this->modelBarang->detailBarang($id_barang);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('DetailBarang',$data);
		$this->load->view('templates/footer');
	}

	public function deleteCart(){
		$this->cart->destroy();
		redirect('dashboard');
	}

    public function processOrder(){
	$is_processed = $this->modelinvoice->index();
	if($is_processed){
		$this->cart->destroy();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('processOrder');
		$this->load->view('templates/footer');
	} else{
		echo "Maaf, Pesanan Anda Gagal diproses";
	}
	}

    public function payment(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('payment');
		$this->load->view('templates/footer');
	}

}