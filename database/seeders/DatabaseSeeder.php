<?php

namespace Database\Seeders;

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
       /** DB::table('tb_especialidades')->insert([
            'especiliadad'       => 'Maxilofacial',
        ]); 
        */
        $this->call(ProductsTableSeeder::class);
    }
}
