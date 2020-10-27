<?php

use App\Garage;
use App\Proposal;
use Illuminate\Database\Seeder;

class GaragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Garage::class, 100)->create()->each(function (Garage $garage) {
            $garage->proposals()->saveMany(factory(Proposal::class, rand(1, 5))->make());
        });
    }
}
