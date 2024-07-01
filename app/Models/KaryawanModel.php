<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'karyawan';
    protected $primaryKey       = 'id_karyawan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Karyawan';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_user',
        'nama_karyawan',
        'jabatan',
        'gaji',
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
        'nama_karyawan' => 'required',
        'jabatan' => 'required',
        'gaji' => 'required',
    ];
    protected $validationMessages   = [
        'id_user' => ['required' => 'Masukkan id_user'],
        'nama_karyawan' => ['required' => 'Masukkan nama_karyawan'],
        'jabatan' => ['required' => 'Masukkan jabatan'],
        'gaji' => ['required' => 'Masukkan gaji'],
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
