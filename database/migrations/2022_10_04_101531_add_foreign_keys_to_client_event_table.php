<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClientEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_event', function (Blueprint $table) {
            $table->foreign(['client_id'], 'fk_client_event_client_id')->references(['id'])->on('client')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['event_frequency_id'], 'fk_client_event_event_frequency_id')->references(['id'])->on('event_frequency')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_event', function (Blueprint $table) {
            $table->dropForeign('fk_client_event_client_id');
            $table->dropForeign('fk_client_event_event_frequency_id');
        });
    }
}
