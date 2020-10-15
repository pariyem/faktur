<?php
class M_penawaran extends CI_Model{
  function __construct(){
    $this->load->database();  
  }

  function M_penawaran ($tanggal1,$tanggal2,$agen){
    $this->db->select('penawaran.*,penawaran.id_penawaran,penawaran.pembeli,penawaran.nm_brg,penawaran.jml_brg,penawaran.hrg_satuan,penawaran.alamat,penawaran.PPN,penawaran.DP,penawaran.NO_HP,penawaran.total_harga,produk.id,produk.nama,users.id, users.nama,users.no_hp,users.alamat,users.email,users.keterangan');
    $this->db->from('penawaran');
    $this->db->join('penawaran', 'penawaran.id = produk.id ','left');
    $this->db->join('users', 'users.id = penawaran.id ','left');
    $this->db->where('penawaran.pembeli', $agen);
    $this->db->where('pengiriman.tanggal >=', $tanggal1);
    $this->db->where('pengiriman.tanggal <=', $tanggal2);
    $query = $this->db->get()->result();
    return $query;

    function m_listkirim($cabang){
    $this->db->select('*');
    $this->db->from('pengiriman');
    $this->db->where('cabang',$cabang);
    $this->db->join('nasabah', 'nasabah.id_nasabah = pengiriman.id_pengirim','left');
    $this->db->order_by('pengiriman.tanggal','DESC');
    $query = $this->db->get();
    return $query;