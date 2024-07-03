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
        'id_user',
        'tanggal_penjualan',
        'jml_telur_terjual',
        'harga_satuan',
        'total_pendapatan',
        'pembeli',
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
        'tanggal_penjualan' => 'required',
        'jml_telur_terjual' => 'required',
        'harga_satuan' => 'required',
        'total_pendapatan' => 'required',
        'pembeli' => 'required',
    ];
    protected $validationMessages   = [
        'id_user' => [ 'required' => 'Masukkan id_user'
        ],
        'tanggal_penjualan' => [ 'required' => 'Masukkan tanggal_penjualan'
        ],
        'jml_telur_terjual' => [ 'required' => 'Masukkan jml_telur_terjual'
        ],
        'harga_satuan' => [ 'required' => 'Masukkan harga_satuan'
        ],
        'total_pendapatan' => [ 'required' => 'Masukkan total_pendapatan'
        ],
        'pembeli' => [ 'required' => 'Masukkan pembeli'
        ],
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
