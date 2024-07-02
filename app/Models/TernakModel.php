<?php

namespace App\Models;

use CodeIgniter\Model;

class TernakModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ternak';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entites\Ternak';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_kandang', 
        'id_user', 
        'jenis_hewan', 
        'jumlah_hewan', 
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'id_kandang'=>'reguired', 
        'id_user'=>'reguired', 
        'jenis_hewan'=>'reguired', 
        'jumlah_hewan'=>'reguired', 
    ];
    protected $validationMessages   = [
        'id_kandang'=>'reguired', 
        'id_user'=>'reguired', 
        'jenis_hewan'=>'reguired', 
        'jumlah_hewan'=>'reguired', 
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
