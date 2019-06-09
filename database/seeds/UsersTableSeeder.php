<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 0
        ]);
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@user1.com',
            'password' => bcrypt('user'),
        ]);
    }
}
