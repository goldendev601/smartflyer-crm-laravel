<?php

namespace App\Console\Commands;

use App\Jobs\ImportClientsJob;
use Illuminate\Console\Command;

class ImportClientsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:clients';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import client list from csv file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $clients = file(public_path('client/client.csv'));
        $chunks = array_chunk($clients, 1000);
        $header = [];
        foreach ($chunks as $key => $chunk) {
            $data = array_map('str_getcsv', $chunk);
            if ($key === 0) {
                $header = $data[0];
                unset($data[0]);
            }
            ImportClientsJob::dispatch($data, $header);
        }

    }
}
