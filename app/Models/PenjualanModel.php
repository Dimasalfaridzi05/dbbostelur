<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'penjualan';
    protected $primaryKey       = 'id_penjualan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Penjualan';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
            'id_user' ,
            'id_gudang' ,
            'tanggal_penjualan' ,
            'jml_telur_terjual' ,
            'harga_perkilo' ,
            'total_pendapatan' ,
            'pembeli' ,
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
            'id_gudang' => 'required',
            'tanggal_penjualan' => 'required',
            'jml_telur_terjual' => 'required',
            'harga_perkilo' => 'required',
            'total_pendapatan' => 'required',
            'pembeli' => 'required',
    ];
    protected $validationMessages   = [
            'id_user' => ['required' => 'masukkan id_user'],
            'id_gudang' => ['required' => 'masukkan id_gudang'],
            'tanggal_penjualan' => ['required' => 'masukkan tanggal_penjualan'],
            'jml_telur_terjual' => ['required' => 'masukkan jml_telur_terjual'],
            'harga_perkilo' => ['required' => 'masukkan harga_perkilo'],
            'total_pendapatan' => ['required' => 'masukkan total_pendapatan'],
            'pembeli' => ['required' => 'masukkan pembeli'],
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
