<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UploadWines extends Command
{

    protected $signature = 'upload:wines';


    protected $description = 'Fill the App database with RSS feed wines';


    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $totalWines = DB::table('wines')->count();
    }
}
