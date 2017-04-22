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
            'name' => 'Jinmy',
            'email' => 'solisjinmy@gmail.com',
            'password' => bcrypt('jinmysolis'),
            'role' => 0,
        ]);
        
        User::create([
            'name' => 'soporte',
            'email' => 'soporte@gmail.com',
            'password' => bcrypt('jinmysolis'),
            'role' => 1,
        ]);
        
        User::create([
            'name' => 'cliente',
            'email' => 'cliente@gmail.com',
            'password' => bcrypt('jinmysolis'),
            'role' => 2,
        ]);
    }
}
