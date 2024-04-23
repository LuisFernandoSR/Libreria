<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Create extends Migration
{
    public function up()
    {
    $this->forge->addField([
        'Id_Usuarios' => [
            'type'           => 'INT',
            'constraint'     => 5,
            'unsigned'       => true,
            'auto_increment' => true,
            
        ],
        'Usuario' => [
            'type'       => 'VARCHAR',
            'constraint' => '245',
            
        ],
        'Password' => [
            'type'       => 'VARCHAR',
            'constraint' => '500',
            
        ],
        //'created_at timestamp default current_timestamp',
        //updated_at timestamp default current_timestamp on updated current_timestamp'

    ]);
    $this->forge->addKey('Id_Usuarios', true);
    $this->forge->createTable('UsuariosL');
    }

    public function down()
    {
        $this->forge->dropTable('UsuariosL');
    }
}
