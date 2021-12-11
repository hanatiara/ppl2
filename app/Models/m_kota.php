<?php

namespace App\Models;

use CodeIgniter\Model;

class m_kota extends Model {

    protected $table      = 'kota';
    protected $primaryKey = 'id_kota';

    protected $allowedFields = ['id_kota', 'nama_kota','jumlah_penduduk','gambar'];

    public function __construct() {
        $this->db = db_connect();
    }

    public function getDataKota() {
        $sql = "SELECT * FROM kota";
        return $this->db->query($sql)->getResult();
    }

   public function deleteKota($id) 
    {
        $sql = "DELETE FROM kota WHERE id_kota=$id";
        return $this->db->query($sql);
    }

    public function viewDataKota($id) {
        $sql = "SELECT * FROM kota WHERE id_kota=$id";
        return $this->db->query($sql)->getResult();
    }

    public function searchDataKota($key) {
        $sql = "SELECT * FROM kota WHERE nama_kota LIKE '%$key%'";
        return $this->db->query($sql)->getResult();
    }
}

