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
		DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@news.local',
            'password' => bcrypt('password'),
        ]);
    }
}
