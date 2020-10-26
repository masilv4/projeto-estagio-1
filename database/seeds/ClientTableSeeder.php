<?php

use App\Client;
use App\Vehicle;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class, 30)->create()->each(function ($user) {
            $user->vehicles()->saveMany(factory(Vehicle::class, rand(1, 5))->make());
        });
    }
}
