<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => 'admin@email.com',
                'admin' => 1,
            ],
            [
                'name' => 'Desenvolvedor',
                'email' => 'dev@email.com',
                'password' => 'dev@email.com',
                'admin' => 0,
            ],
            [
                'name' => 'Vanessa Dias',
                'email' => 'vessadias@gmail.com',
                'password' => 'vessadias123',
                'admin' => 1,
            ],
        ];

        foreach ($usuarios as $usuario) {
            \App\User::create([
                'name' => $usuario['name'],
                'email' => $usuario['email'],
                'password' => Hash::make($usuario['password']),
                'admin' => $usuario['admin'],
            ]);
        }
    }
}
