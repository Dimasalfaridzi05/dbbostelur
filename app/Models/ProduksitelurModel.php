<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduksitelurModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'produksitelur';
    protected $primaryKey       = 'id_produksi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Produksitelur';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_kandang',
        'id_user',
        'jumlah_telur',
        'kualitas_telur',
        'tanggal_produksi',
        'waktu_pengambilan',
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
        'jumlah_telur'=>'required',
        'kualitas_telur'=>'required',
        'tanggal_produksi'=>'required',
        'waktu_pengambilan'=>'required',
    ];
    protected $validationMessages   = [
        'id_kandang'=>'required',
        'id_user'=>'required',
        'jumlah_telur'=>'required',
        'kualitas_telur'=>'required',
        'tanggal_produksi'=>'required',
        'waktu_pengambilan'=>'required',
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
