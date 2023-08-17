<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PingAymakan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aymakan:ping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will ping the Aymakan API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response =  \Illuminate\Support\Facades\Http::get('https://dev-api.aymakan.com.sa/v2/ping');
        $this->info($response);
        return 0;
    }
}
