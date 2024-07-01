<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'null' => false,
            ],
            'nama_karyawan' => [
                'type' => 'varchar',
                'constraint' => 25,
            ],
            'jabatan' => [
                'type' => 'varchar',
                'constraint' => 25,
            ],
            'gaji' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);

        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('karyawan');
    }

    public function down()
    {
        $this->forge->dropTable('karyawan');
    }
}
