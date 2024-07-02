<?php

namespace App\Models;

use CodeIgniter\Model;

class StokModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'stok';
    protected $primaryKey       = 'id_stok';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Stok';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_user',
        'jumlah_stok',
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
        'jumlah_stok' => 'required',
    ];
    protected $validationMessages   = [
        'id_user' => ['required' => 'Masukkan id_user'],
        'jumlah_stok' => ['required' => 'Masukkan jumlah_stok'],
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
