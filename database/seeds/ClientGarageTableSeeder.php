<?php

use App\Client;
use App\Garage;
use Illuminate\Database\Seeder;

class ClientGarageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = Client::all();

        Garage::all()->each(function (Garage $garage) use ($clients) {
            $garage->clients()->attach(
                $clients->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}
