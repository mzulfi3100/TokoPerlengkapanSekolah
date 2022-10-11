<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCatalogTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produk' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'harga_produk' => [
                'type'       => 'INT',
                'constraint' => '10',
            ],
            'stok_produk' => [
                'type'       => 'INT',
                'constraint' => '10',
            ],
            'deskripsi_produk' => [
                'type'       => 'TEXT',
            ],
            'gambar_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addKey('id_produk', true);
        $this->forge->createTable('katalog');
    }

    public function down()
    {
        $this->forge->dropTable('katalog');
    }
}
