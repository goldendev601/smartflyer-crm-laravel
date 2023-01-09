<?php

namespace App\Console\Commands\Sync;

use App\ModelsExtended\Agent;
use App\Repositories\SmartFlyerWordpress\ApiRequests;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class SychronizeAgentsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:agents-from-wordpress';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will fetch the list of agents from the wordpress website';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $SDK = new ApiRequests();
        $dataArray = $SDK->getAgentList()->getData();

        if( $dataArray && count( $dataArray->records ) )
        {
            $this->withProgressBar( $dataArray->records , function ( \stdClass $row ){
                Agent::query()->updateOrCreate(
                    [
                        'name' => $row->postName,
                    ],
                    [
                        'email' => $row->agent_email,
                        'weblink' => $row->postLink,
                        'address' => $row->locations,
                        'image_url' => $row->postImage,
                        'phone_number' => $row->phone_number,
                ]);
            });
        }

        $this->info( "-------------------------------------" );
        $this->info( "COMPLETED" );
        return 0;
    }
}
