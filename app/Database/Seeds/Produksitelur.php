<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produksitelur extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_ternak' =>'1',
                'id_user' =>'1',
                'jumlah_telur' =>'500',
                'kualitas_telur' =>'Baik',
                'tanggal_produksi' =>'2024-01-01',
                'waktu_pengambilan' =>'10:10:10',
            ]
        ];

        $this->db->table('produksitelur')->insertBatch($data);
    }
}
