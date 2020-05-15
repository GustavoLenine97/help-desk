<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeederr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gustavo Lenine',
            'email' => 'gustavolkjh_@hotmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
