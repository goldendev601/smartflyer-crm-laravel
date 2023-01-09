<?php

namespace App\Jobs;

use App\ModelsExtended\Client;
use App\ModelsExtended\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImportClientsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $data;
    public $header;

    public function __construct($data, $header)
    {
        $this->data = $data;
        $this->header = $header;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        foreach ($this->data as $row) {
            if ($row[0] != null && $row[2] != null && $row[3] != null && $row[16] != null) {

                $user = User::where('email', $row[16])->first();
                if ($user != null) {
                   $client = Client::updateOrCreate(
                        ['email' => $row[3]],
                        [
                            'first_name' =>$row[0],
                            'middle_name' => $row[1],
                            'last_name' => $row[2],
                            'phone' => $row[4],
                            'date_of_birth' => $row[5],
                            'social_facebook_url' => $row[6],
                            'social_instagram_url' => $row[7],
                            'social_linkedin_url' => $row[8],
                            'social_twitter_url' => $row[9],
                            'social_custom_url' => $row[10],
                            'notes' => $row[11],
                            'address' => $row[12],
//                            'profile_picture_relative_url' => $row[13],
                            'likes' => $row[14],
                            'dislikes' => $row[15],
                            'created_by_id' => $user->id,

                        ]
                    );
                    if($row[13] !=null){
                        $client->validateUrlAndStorePicture($row[13]);
                    }

                }

            }


        }
    }
}
