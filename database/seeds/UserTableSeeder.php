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

        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => 'Андрей Гроза',
            'email' => 'andrey_groza@mail.ru',
            'password' => bcrypt('1231230')
        ]);

        DB::table('users')->insert([
            'name' => 'Милуниция Зайчикова',
            'email' => 'MilaNi2106@yandex.ru',
            'password' => bcrypt('9180875660mila')
        ]);
    }
}
