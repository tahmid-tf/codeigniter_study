<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateArticleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
                null => false
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'content' => [
                'type' => 'TEXT',
                'null' => true,
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('article');
    }

    public function down()
    {
        $this->forge->dropTable('article');
    }
}
