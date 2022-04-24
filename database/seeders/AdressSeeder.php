<?php

namespace Database\Seeders;

use App\Models\Adress;
use Database\Factories\Adress as FactoriesAdress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Adress::factory(1)->create();
    }
}
