<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kandang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kandang' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'null' => false,
            ],
            'nama_kandang' => [
                'type' => 'varchar',
                'constraint' => 25,
            ],
            'lokasi' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'stok_telur' => [
                'type' => 'INT',
                'null' => true,
            ],
            'jumlah_ternak' => [
                'type' => 'INT',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_kandang', true);
        $this->forge->createTable('kandang');
    }

    public function down()
    {
        $this->forge->dropTable('kandang');
    }
}
