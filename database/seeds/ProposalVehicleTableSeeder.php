<?php

use App\Proposal;
use App\Vehicle;
use Illuminate\Database\Seeder;

class ProposalVehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proposals = Proposal::all();

        Vehicle::all()->each(function ($vehicle) use ($proposals) {
           $vehicle->proposals()->attach(
               $proposals->random(rand(1, 5))->pluck('id')->toArray()
           );
        });
    }
}
