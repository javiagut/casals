<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $arrays = range(0,10);
        $i=0;
        foreach ($arrays as $valor) {
            DB::table('ciutats')->insert([
                'nom' => 'Ciutat '.$i,
                'n_habitants' => 500
            ]);
            $i++;
        }
    }
}
