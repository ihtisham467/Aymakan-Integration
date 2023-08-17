<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class AymakanLogin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aymakan:login {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This api is for login';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        // API endpoint URL
        $apiUrl = 'https://dev-api.aymakan.com.sa/v2/login'; // Use the appropriate URL here

        // Request data
        $data = [
            'email' => $email,
            'password' => $password,
        ];

        // Send POST request
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->post($apiUrl, $data);

        $this->info($response);
        return 0;
    }
}
