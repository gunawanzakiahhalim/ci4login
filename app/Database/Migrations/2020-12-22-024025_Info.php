<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Info extends Migration
{
	public function up()
	{

		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'slug' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'id_menu' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'subcategory1' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'status' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('info');
	}

	public function down()
	{
		$this->forge->dropTable('info');
	}
}
