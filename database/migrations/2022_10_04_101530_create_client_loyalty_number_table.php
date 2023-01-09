<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientLoyaltyNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_loyalty_number', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number', 300);
            $table->unsignedBigInteger('loyalty_program_id')->index('fk_client_loyalty_number_loyalty_program_id');
            $table->unsignedBigInteger('client_id')->index('fk_client_loyalty_number_client_id');
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
        Schema::dropIfExists('client_loyalty_number');
    }
}
