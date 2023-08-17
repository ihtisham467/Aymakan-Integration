<?php

namespace App\Console\Commands;

use App\Models\Shipment;
use Illuminate\Console\Command;

class CancelShipment extends Command
{
    protected $signature = 'shipments:cancel {tracking number}';

    protected $description = 'Track a shipment by tracking number';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $shipment = Shipment::where('tracking_no', $this->argument('tracking number'))->exists();
        if($shipment) {
            Shipment::where('tracking_no', $this->argument('tracking number'))->update([
                'status' => 'Cancelled',
            ]);
            $this->info('Shipment Cancelled Successfully!');
        } else {
            $this->info('Shipment not found!');
        }

        return 0;
    }
}
