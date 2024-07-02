<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pengguna extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'dimaskopling',
                'email' => 'dimas@gmail.com',
                'alamat' => 'Pemalang',
                'no_telepon' => '0109280123',
                'password' => 'dimasskibidi',
            ]
        ];

        $this->db->table('table_name')->insertBatch($data);
    }
}
