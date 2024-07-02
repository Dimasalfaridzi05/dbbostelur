<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Ternak extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_kandang'=>'1', 
                'id_user'=>'1', 
                'jenis_hewan'=>'Boiler', 
                'jumlah_hewan'=>'500', 
            ]
        ];

        $this->db->table('ternak')->insertBatch($data);
    }
}
