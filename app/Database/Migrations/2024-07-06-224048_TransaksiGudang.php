<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiGudang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi' => [
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
            'id_gudang' => [
                'type' => 'INT',
                'null' => false,
            ],
            'tanggal' => [
                'type' => 'date',
                'null' => false,
            ],
            'jml_telur' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);

        $this->forge->addKey('id_transaksi', true);
        $this->forge->createTable('transaksigudang');
    }

    public function down()
    {
        $this->forge->dropTable('transaksigudang');
    }
}
