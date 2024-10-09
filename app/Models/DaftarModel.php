<?php

namespace App\Models;
use CodeIgniter\Model;

class DaftarModel extends Model{
  protected $table = "tbl_pendaftaran";
  protected $primaryKey = "ID_PENDAFTARAN";
  protected $allowedFields = [
    "ID_PENDAFTARAN",
    "NAMA",
    "AGAMA",
    "TEMPATLAHIR",
    "TINGGIBADAN",
    "BERATBADAN",
    "NAMAHUBUNGAN",
    "JENIS_DOKUMEN",
    "NOMOR_DOKUMEN",
    "NAMAHOBBY",
    "ALAMAT",
    "USERNAME",
    "PASSWORD"
  ];

  public function get_data_all() {
    $query = $this->db->query("SELECT * FROM `tbl_pendaftaran`");
    return $query->getResultArray();
  }


}





?>