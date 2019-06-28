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
            [
                'name' => 'Admin',
                'username' => 'Admin',
                'phone' => '08188631121',
                'address' => 'Nigeria',
                'email' => 'admin@paybybit.com',
                'password' => bcrypt('secret'),
                'role_id' => 2
            ],
        ]);
    }
}
