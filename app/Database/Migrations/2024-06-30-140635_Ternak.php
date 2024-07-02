<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ternak extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ternak' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'id_kandang' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'jenis_hewan' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'jumlah_hewan' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('ternak');
    }

    public function down()
    {
        $this->forge->dropTable('ternak');
    }
}
