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
      'username' => 'admin',
      'address' => '55/55',
      'tel' => '0895436642',
      'email' => 'champ@gmail.com',
      'password' => bcrypt('admin')
      ]);
    }
}
