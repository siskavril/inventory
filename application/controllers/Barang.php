<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('barang_model');
	}
	
	public function index()
	{
		$data['barang'] = $this->barang_model->get_barang();
		$this->load->view('header_view');
		$this->load->view('barang_view', $data);
		$this->load->view('footer_view');
	}
	
	function add_new(){
		$this->load->view('header_view');
		$this->load->view('add_barang_view');
		$this->load->view('footer_view');
	}
	
	function save(){
		$nama_barang = $this->input->post('nama_barang');
		$satuan = $this->input->post('satuan');
		$jumlah = $this->input->post('jumlah');
		$diambil_oleh = $this->input->post('diambil_oleh');
		$diserahkan_oleh = $this->input->post('diserahkan_oleh');
		$keterangan = $this->input->post('keterangan');
		$tanggal = $this->input->post('tanggal');
		$this->barang_model->save($nama_barang,$satuan,$jumlah,$diambil_oleh,$diserahkan_oleh,$keterangan,$tanggal);
		redirect('barang');
	}
	
	function delete(){
		$barang_id = $this->uri->segment(3);
		$this->barang_model->delete($barang_id);
		redirect('barang');
	}
	
	function get_edit(){
    $barang_id = $this->uri->segment(3);
    $result = $this->barang_model->get_barang_id($barang_id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
           'barang_id'    => $i['barang_id'], 
           'nama_barang'    => $i['nama_barang'], 
           'satuan'    => $i['satuan'], 
           'jumlah'    => $i['jumlah'], 
           'diambil_oleh'    => $i['diambil_oleh'], 
           'diserahkan_oleh'    => $i['diserahkan_oleh'], 
           'tanggal'    => $i['tanggal'], 
           'keterangan'    => $i['keterangan'] 
        );
        $this->load->view('header_view');
		$this->load->view('edit_barang_view', $data);
		$this->load->view('footer_view');
    }else{
        echo "Data Was Not Found";
    }
  }
  function update(){
		$barang_id = $this->input->post('barang_id');
		$nama_barang = $this->input->post('nama_barang');
		$satuan = $this->input->post('satuan');
		$jumlah = $this->input->post('jumlah');
		$diambil_oleh = $this->input->post('diambil_oleh');
		$diserahkan_oleh = $this->input->post('diserahkan_oleh');
		$keterangan = $this->input->post('keterangan');
		$tanggal = $this->input->post('tanggal');
    $this->barang_model->update($barang_id,$nama_barang,$satuan,$jumlah,$diambil_oleh,$diserahkan_oleh,$keterangan,$tanggal);
    redirect('barang');
  }
	
	
}
