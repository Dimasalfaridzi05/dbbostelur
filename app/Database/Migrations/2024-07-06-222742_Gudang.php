<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gudang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_gudang' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'null' => false,
            ],
            'lokasi' => [
                'type' => 'varchar',
                'constraint' => 25,
            ],
            'stok_telur' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);

        $this->forge->addKey('id_gudang', true);
        $this->forge->createTable('gudang');
    }

    public function down()
    {
        $this->forge->dropTable('gudang');
    }
}
