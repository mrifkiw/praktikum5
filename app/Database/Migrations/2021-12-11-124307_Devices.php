<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Devices extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'  => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'device_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'device_brand' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'device_quantity' => [
                'type' => 'INT',
                'constraint' => 100,
                'default' => 0,
            ],
            'device_status' => [
                'type' => 'ENUM',
                'constraint' => ['on', 'off'],
                'default' => 'off'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('devices',TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('devices');
    }
}
