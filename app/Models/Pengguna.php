<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pengguna';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Pengguna';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'username' => 'required|is_unique[pengguna.username]|trim',
        'email' => 'required|valid_email|is_unique[pengguna.email]|',
        'alamat' => 'required',
        'no_telepon' => 'required',
        'password' => 'required',
    ];
    protected $validationMessages   = [
        'username' => [
            'required'=> 'Masukkan username',
            'is_unique'=> 'nama sudah terdaftar, silahkan masukkan nama yang lain',
            'trim'=> 'username tidak boleh spasi'
        ],
        'email' => [
            'required'=> 'Masukkan email',
            'valid_email'=> 'silahkan masukkan email yang valid',
            'is_unique'=> 'email sudah terdaftar, silahkan masukkan email yang lain',
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
