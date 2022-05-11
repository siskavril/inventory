<?php
class Barang_model extends CI_Model{
 
  function get_barang(){
    $result = $this->db->get('barang');
    return $result;
  }
  
  function save($nama_barang,$satuan,$jumlah,$diambil_oleh,$diserahkan_oleh,$keterangan,$tanggal){
    $data = array(
      'nama_barang' => $nama_barang,
      'satuan' => $satuan,
      'jumlah' => $jumlah,
      'diambil_oleh' => $diambil_oleh,
      'diserahkan_oleh' => $diserahkan_oleh,
      'diserahkan_oleh' => $diserahkan_oleh,
      'keterangan' => $keterangan,
      'tanggal' => $tanggal
    );
    $this->db->insert('barang',$data);
  }
  
	function delete($barang_id){
    $this->db->where('barang_id', $barang_id);
    $this->db->delete('barang');
	}
	
	function get_barang_id($barang_id){
    $query = $this->db->get_where('barang', array('barang_id' => $barang_id));
    return $query;
	}
	
	function update($barang_id,$nama_barang,$satuan,$jumlah,$diambil_oleh,$diserahkan_oleh,$keterangan,$tanggal){
    $data = array(
      'nama_barang' => $nama_barang,
      'satuan' => $satuan,
      'jumlah' => $jumlah,
      'diambil_oleh' => $diambil_oleh,
      'diserahkan_oleh' => $diserahkan_oleh,
      'diserahkan_oleh' => $diserahkan_oleh,
      'keterangan' => $keterangan,
      'tanggal' => $tanggal
    );
    $this->db->where('barang_id', $barang_id);
    $this->db->update('barang', $data);
	}
   
}