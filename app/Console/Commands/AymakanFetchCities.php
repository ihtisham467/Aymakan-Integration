<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class AymakanFetchCities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aymakan:fetch-cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For fetching cities where aymakan can ship';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // API endpoint URL
        $apiUrl = 'https://dev-api.aymakan.com.sa/v2/cities'; // Use the appropriate URL here

        // Send POST request
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get($apiUrl);

        $this->info($response);
        return 0;
    }
}
