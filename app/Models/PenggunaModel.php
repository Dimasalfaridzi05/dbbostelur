<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pengguna';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Pengguna';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'username' ,
        'email' ,
        'alamat' ,
        'no_telepon' ,
        'password' ,
    ];
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'username' => 'required|regex_match[/^\S*$/]',
        'email' => 'required|valid_email',
        'alamat' => 'required',
        'no_telepon' => 'required',
        'password' => 'required',
    ];
    protected $validationMessages   = [
        'username' => [
            'required'=> 'Masukkan username',
            'regex_match'=> 'nama tidak dapat dispasi',
        ],
        'email' => [
            'required'=> 'Masukkan email',
            'valid_email'=> 'silahkan masukkan email yang valid',
        ],
        'alamat' => ['required'=> 'Masukkan alamat'
        ],
        'no_telepon' => ['required'=> 'Masukkan no_telepon'
        ],
        'password' => ['required'=> 'Masukkan password'
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
