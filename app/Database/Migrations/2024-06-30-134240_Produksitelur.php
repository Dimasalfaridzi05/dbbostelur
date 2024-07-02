<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produksitelur extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produksi' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'id_kandang' => [
                'type' => 'INT',
                'null' => false,
            ],
            'id_user' => [
                'type' => 'INT',
                'null' => false,
            ],
            'jumlah_telur' => [
                'type' => 'INT',
                'null' => false,
            ],
            'kualitas_telur' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'tanggal_produksi' => [
                'type' => 'date',
                'null' => false,
            ],
            'waktu_pengambilan' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addKey('id_produksi', true);
        $this->forge->createTable('produksitelur');
    }

    public function down()
    {
        $this->forge->dropTable('produksitelur');
    }
}
