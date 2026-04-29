<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CreateCommentTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "text" => [
                "type" => "TEXT"
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 255,
            ],
            "created_at" => [
                "type" => "DATETIME",
                "null" => true
            ],
            "updated_at" => [
                "type" => "DATETIME",
                "null" => true
            ]
        ]);

        $this->forge->addKey("id", true);
        $this->forge->createTable("comments");
    }

    public function down()
    {
        $this->forge->dropTable("comments");
    }
}
