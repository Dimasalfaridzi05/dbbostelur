<?php

namespace App\Models;

use CodeIgniter\Model;

class KandangModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kandang';
    protected $primaryKey       = 'id_kandang';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Kandang';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_user',
        'nama_kandang',
        'lokasi',
        'stok_telur',
        'jumlah_ternak',
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
        'nama_kandang' => 'required',
        'lokasi' => 'required',
        'stok_telur' => 'required',
        'jumlah_ternak' => 'required',
    ];
    protected $validationMessages   = [
        'id_user' => ['required' => 'Masukkan id_user'],
        'nama_kandang' => ['required' => 'Masukkan nama_kandang'],
        'lokasi' => ['required' => 'Masukkan lokasi'],
        'stok_telur' => ['required' => 'Masukkan stok_telur'],
        'jumlah_ternak' => ['required' => 'Masukkan jumlah_ternak'],
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
