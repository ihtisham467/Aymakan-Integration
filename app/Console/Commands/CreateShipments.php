<?php

namespace App\Console\Commands;

use App\Models\Shipment;
use Illuminate\Console\Command;

class CreateShipments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shipments:create {count=10}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create 10 Random Shipments';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Shipment::factory($this->argument('count'))->create();

        $this->info($this->argument('count').' Random Shipments Created');

        return 0;
    }
}
