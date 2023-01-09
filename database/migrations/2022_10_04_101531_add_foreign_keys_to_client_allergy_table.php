<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClientAllergyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_allergy', function (Blueprint $table) {
            $table->foreign(['client_id'], 'fk_client_allergy_client_id')->references(['id'])->on('client')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['allergy_id'], 'fk_client_allergy_allergy_id')->references(['id'])->on('allergy')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_allergy', function (Blueprint $table) {
            $table->dropForeign('fk_client_allergy_client_id');
            $table->dropForeign('fk_client_allergy_allergy_id');
        });
    }
}
