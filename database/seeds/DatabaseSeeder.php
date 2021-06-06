<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            'name' => 'Quang',
            'email' => 'quang@gmail.com',
            'phone' => '039283586',
            'password' => \Hash::make('123456')
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
