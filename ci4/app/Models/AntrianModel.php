<?php 

namespace App\Models; 

use CodeIgniter\Model; 

class AntrianModel extends Model 
{ 
    protected $table = 'antrian'; 
    protected $primaryKey = 'nomor_antrian'; 
    protected $useAutoIncrement = true; 
    protected $allowedFields = ['nomor_antrian', 'nama', 'jenis_kelamin', 'pekerjaan', 'loket']; 

} 
