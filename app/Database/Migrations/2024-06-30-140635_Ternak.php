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
                'null' => false,
            ],
            'id_user' => [
                'type' => 'INT',
                'null' => false,
            ],
            'jenis_hewan' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'jumlah_hewan' => [
                'type' => 'INT',
                'null' => false,
            ],
            'keterangan' => [
                'type' => 'varchar',
                'constraint' => 15,
            ],
            'keterangan' => [
                'type' => 'date',
                'null' => false,
            ],
        ]);

        $this->forge->addKey('id_ternak', true);
        $this->forge->createTable('ternak');
    }

    public function down()
    {
        $this->forge->dropTable('ternak');
    }
}
