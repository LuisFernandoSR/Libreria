<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {

        $usuario = "admin";
        $password = password_hash("123", PASSWORD_DEFAULT);

        $data = [
            'usuario' => $usuario,
            'password'=> $password,
        ];

        // Using Query Builder
        $this->db->table('usuarios')->insert($data);
    }
}
