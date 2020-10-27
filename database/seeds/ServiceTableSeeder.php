<?php

use App\Proposal;
use App\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proposals = Proposal::all();

        factory(Service::class, 100)->create()->each(function (Service $service) use ($proposals) {
            $service->proposals()->attach(
                $proposals->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}
