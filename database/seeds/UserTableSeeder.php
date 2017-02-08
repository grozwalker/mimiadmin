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
        DB::table('users')->insert([
            'name' => 'grozwalker',
            'email' => 'andrey_groza@mail.ru',
            'password' => bcrypt('1231230'),
        ]);

        DB::table('users')->insert([
            'name' => 'MilaNi',
            'email' => 'MilaNi2106@yandex.ru',
            'password' => bcrypt('9180875660mila'),
        ]);
    }
}
