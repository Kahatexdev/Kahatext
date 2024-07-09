<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MessageTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'from_user_id'       => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'to_user_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'message' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('from_user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('to_user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('messages');
    }

    public function down()
    {
        $this->forge->dropTable('messages');
    }
}
