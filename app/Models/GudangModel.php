<?php

namespace App\Models;

use CodeIgniter\Model;

class GudangModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'gudang';
    protected $primaryKey       = 'id_gudang';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Gudang';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_user',
        'lokasi',
        'stok_telur',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'id_user' => 'required',
        'lokasi' => 'required',
        'stok_telur' => 'required',
    ];
    protected $validationMessages   = [
        'id_user' => ['required' => 'Masukkan id_user'],
        'lokasi' => ['required' => 'Masukkan lokasi'],
        'stok_telur' => ['required' => 'Masukkan stok_telur'],
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
