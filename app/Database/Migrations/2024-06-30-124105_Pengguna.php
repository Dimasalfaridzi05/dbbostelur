<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengguna extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'alamat' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'no_telepon' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addKey('id_user', true);
        $this->forge->createTable('pengguna');
    }

    public function down()
    {
        $this->forge->dropTable('pengguna');
    }
}
