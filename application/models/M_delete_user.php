<?php
class M_pfaktur_penawaran extends CI_Model {
  public function select_all_pegawai() {
    $sql = "SELECT * FROM penawaran";

    $data = $this->db->query($sql);

    return $data->result();
  }

  public function select_all() {
    $sql = " SELECT penawaran.id AS id, penawaran.pembeli AS pembeli, penawaran.nm_brg AS nm_brg, penawaran.jml_brg AS jml_brg, penawaran.hrg_brg AS hrg_brg, penawaran.hrg_satuan AS hrg_satuan, penawaran.alamat AS alamt, penawaran.PPN AS PPN, penawaran.DP AS DP, penawaran.NO_HP AS NO_HP, penawaran.total_harga AS total_harga,  faktur.nama AS faktur, produk.nama AS produk 
      FROM penawaran, faktur , produk 
      WHERE penawaran.id = produk.id 
      AND penawaran.id = faktur.id";

    $data = $this->db->query($sql);

    return $data->result();
  }

  public function select_by_id($id) {
    $sql = " SELECT penawaran.id AS id, penawaran.pembeli AS pembeli, penawaran.nm_brg AS nm_brg, penawaran.jml_brg AS jml_brg, penawaran.hrg_brg AS hrg_brg, penawaran.hrg_satuan AS hrg_satuan, penawaran.alamat AS alamt, penawaran.PPN AS PPN, penawaran.DP AS DP, penawaran.NO_HP AS NO_HP, penawaran.total_harga AS total_harga,  faktur.nama AS faktur, produk.nama AS produk 
      FROM penawaran, faktur , produk 
      WHERE penawaran.id = faktur.id 
      AND penawaran.id = produk.id 
      AND pegawai.id = produk.id 
      AND produk.id = '{$id}'";

    $data = $this->db->query($sql);

    return $data->row();
  }

  public function select_by_faktur($id) {
    $sql = "SELECT COUNT(*) AS jml FROM penawaran WHERE id = {$id}";

    $data = $this->db->query($sql);

    return $data->row();
  }

  public function select_by_produk($id) {
    $sql = "SELECT COUNT(*) AS jml FROM penawaran WHERE id = {$id}";

    $data = $this->db->query($sql);

    return $data->row();
  }

  public function update($data) {
    $sql = "UPDATE penawaran SET pembeli='" .$data['pembeli'] ."', nm_brg='" .$data['nm_brg'] ."', jml_brg=" .$data['jml_brg'] .", hrg_brg=" .$data['hrg_brg'] .", hrg_satuan=" .$data['hrg_satuan'] .", alamat=" .$data['alamt'] .", PPN=" .$data['PPN'] .", NO_HP=" .$data['NO_HP'] .", total_harga=" .$data['total_harga'] ." WHERE id='" .$data['id'] ."'";

    $this->db->query($sql);

    return $this->db->affected_rows();
  }

  public function delete($id) {
    $sql = "DELETE FROM penawaran WHERE id='" .$id ."'";

    $this->db->query($sql);

    return $this->db->affected_rows();
  }

  public function insert($data) {
    $id = md5(DATE('ymdhms').rand());
    $sql = "INSERT INTO penawaran VALUES('{$id}','" .$data['pembeli'] ."','" .$data['nm_brg'] ."'," .$data['jml_brg'] ."," .$data['hrg_brg'] ."," .$data['hrg_satuan'] ."," .$data['alamat'] ."," .$data['PPN'] ."," .$data['NO_HP'] ."," .$data['total_harga'] .",1)";

    $this->db->query($sql);

    return $this->db->affected_rows();
  }

  public function insert_batch($data) {
    $this->db->insert_batch('penawaran', $data);
    
    return $this->db->affected_rows();
  }

  public function check_nama($nama) {
    $this->db->where('pembeli', $pembeli);
    $data = $this->db->get('penawaran');

    return $data->num_rows();
  }

  public function total_rows() {
    $data = $this->db->get('penawaran');

    return $data->num_rows();
  }
}