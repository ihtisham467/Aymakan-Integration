<?php

namespace App\Console\Commands;

use App\Models\Shipment;
use Illuminate\Console\Command;

class TrackShipment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shipments:track {tracking number}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Track a shipment by tracking number';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $shipment = Shipment::select('tracking_no', 'reference', 'status', 'tracking_info')->where('tracking_no', $this->argument('tracking number'))->first();
        if($shipment) {
        $this->info('Tracking No: '.$shipment->tracking_no. ' Reference: '.$shipment->reference. ' Status: '.$shipment->status. ' Tracking Information: '.$shipment->tracking_info);
        } else {
            $this->info('Shipment not found!');
        }

        return 0;
    }
}
