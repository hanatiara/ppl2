<?php

namespace App\Models;

use CodeIgniter\Model;

class m_login extends Model{
    protected $table = "admin";
    protected $primaryKey = "username";
    protected $allowedFields = ['username', 'password', 'id'];

}

?>