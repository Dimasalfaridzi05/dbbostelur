<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penjualan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penjualan' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'null' => false,
            ],
            'id_kandang' => [
                'type' => 'INT',
                'null' => false,
            ],
            'tanggal_penjualan' => [
                'type' => 'date',
                'null' => false,
            ],
            'jml_telur_terjual' => [
                'type' => 'INT',
                'null' => false,
            ],
            'harga_satuan' => [
                'type' => 'INT',
                'null' => false,
            ],
            'total_pendapatan' => [
                'type' => 'INT',
                'null' => false,
            ],
            'pembeli' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
        ]);

        $this->forge->addKey('id_penjualan', true);
        $this->forge->addForeignKey('id_kandang', 'Kandang', 'id_kandang');
        $this->forge->createTable('Penjualan');
    }

    public function down()
    {
        $this->forge->dropTable('Penjualan');
    }
}
