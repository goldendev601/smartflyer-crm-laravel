<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClientLoyaltyNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_loyalty_number', function (Blueprint $table) {
            $table->foreign(['client_id'], 'fk_client_loyalty_number_client_id')->references(['id'])->on('client')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['loyalty_program_id'], 'fk_client_loyalty_number_loyalty_program_id')->references(['id'])->on('loyalty_program')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_loyalty_number', function (Blueprint $table) {
            $table->dropForeign('fk_client_loyalty_number_client_id');
            $table->dropForeign('fk_client_loyalty_number_loyalty_program_id');
        });
    }
}
