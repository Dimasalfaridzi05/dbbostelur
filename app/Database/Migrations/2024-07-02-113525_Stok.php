<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stok extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_stok' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'null' => false,
            ],
            'jumlah_stok' => [
                'type' => 'INT',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_stok', true);
        $this->forge->createTable('stok');
    }

    public function down()
    {
        $this->forge->dropTable('stok');
    }
}
