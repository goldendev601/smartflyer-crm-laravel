<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_event', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 300);
            $table->string('email');
            $table->date('event_date')->nullable();
            $table->unsignedBigInteger('event_frequency_id')->index('fk_client_event_event_frequency_id');
            $table->unsignedBigInteger('client_id')->index('fk_client_event_client_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_event');
    }
}
