<?php

namespace App\Models;

use CodeIgniter\Model;

class FormpesanModel extends Model
{
    protected $table = 'tbl_formpesan';
    protected $primaryKey = 'id_pesan';
    protected $dateTime = 'date';
    protected $allowedFields = ['nama', 'email', 'instansi', 'telp', 'alamat', 'tanggalpeminjaman'];
}
