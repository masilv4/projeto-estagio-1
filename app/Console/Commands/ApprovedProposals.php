<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ApprovedProposals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'proposals:approved';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Return the number of approved proposals of the last three months';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return DB::table('proposals')
            ->where('status', '=', 'approved')
            ->where('created_at', '>=',
                Carbon::now(new \DateTimeZone('America/Fortaleza'))
                    ->subMonths(3)
                    ->toDateTimeString())
            ->get();
    }
}
