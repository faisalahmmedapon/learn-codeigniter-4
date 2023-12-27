<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => password_hash('admin@gmail.com',PASSWORD_BCRYPT),
        );


        $this->db->table('users')->insert($data);
    }
}