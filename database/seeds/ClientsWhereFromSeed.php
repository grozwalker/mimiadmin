<?php

use Illuminate\Database\Seeder;

class ClientsWhereFromSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients_wherefrom_type')->delete();

        $wherefroms = [
            'ВК',
            'Инста',
            'Юла',
        ];

        foreach ($wherefroms as $wherefrom) {
            DB::table('clients_wherefrom_type')->insert([
                'name' => $wherefrom,
            ]);
        }

    }
}
