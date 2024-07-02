<?php

namespace App\Models;

use CodeIgniter\Model;

class TernakModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ternak';
    protected $primaryKey       = 'id_ternak';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Ternak';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_kandang', 
        'id_user', 
        'jenis_hewan', 
        'jumlah_hewan', 
        'keterangan',
        'tanggal',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'id_kandang'=>'required', 
        'id_user'=>'required', 
        'jenis_hewan'=>'required', 
        'jumlah_hewan'=>'required',
        'keterangan'=>'required', 
        'tanggal'=>'required', 
    ];
    protected $validationMessages   = [
        'id_kandang'=>'required', 
        'id_user'=>'required', 
        'jenis_hewan'=>'required', 
        'jumlah_hewan'=>'required', 
        'keterangan'=>'required', 
        'tanggal'=>'required', 
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
