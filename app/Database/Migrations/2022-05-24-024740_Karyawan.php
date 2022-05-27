<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_customer'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'phone' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'website' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'country' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'city' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'zipcode' => [
                'type'           => 'VARCHAR',
                'constraint'     => '11',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id_customer');
        $this->forge->createTable('customer');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('customer');
    }
}
