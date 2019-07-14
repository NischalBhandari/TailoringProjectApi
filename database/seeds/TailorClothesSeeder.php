<?php

use Illuminate\Database\Seeder;

class TailorClothesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\tailorclothes::class,30)->create();
    }
}
