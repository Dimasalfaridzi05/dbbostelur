<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiGudangModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'transaksigudang';
    protected $primaryKey       = 'id_transaksi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\TransaksiGudang';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_kandang',
        'id_user',
        'id_gudang',
        'tanggal',
        'jml_telur',    
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'id_kandang' => 'required',
        'id_user' => 'required',
        'id_gudang' => 'required',
        'tanggal' => 'required',
        'jml_telur' => 'required',
    ];
    protected $validationMessages   = [
        'id_kandang' => ['required' => 'Masukkan id_kandang'],
        'id_user' => ['required' => 'Masukkan id_user'],
        'id_gudang' => ['required' => 'Masukkan id_gudang'],
        'tanggal' => ['required' => 'Masukkan tanggal'],
        'jml_telur' => ['required' => 'Masukkan jml_telur'],
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
