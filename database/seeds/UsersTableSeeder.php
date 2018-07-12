<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Danilo Bezerra',
            'email'     => 'daniloocc@gmail.com',
            'password'  => bcrypt('123456'),
        ]);

        User::create([
            'name'      => 'Outro Usuário',
            'email'     => 'outro@usuario.com',
            'password'  => bcrypt('123456'),
        ]);

        User::create([
            'name'      => 'Joao Testeiro',
            'email'     => '2@usuario.com',
            'password'  => bcrypt('123456'),
        ]);

        User::create([
            'name'      => 'Maria Testuda',
            'email'     => '3@usuario.com',
            'password'  => bcrypt('123456'),
        ]);

    }
}
