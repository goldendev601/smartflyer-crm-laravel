<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClientLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_likes', function (Blueprint $table) {
            $table->foreign(['client_id'], 'fk_client_likes_client_id')->references(['id'])->on('client')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_likes', function (Blueprint $table) {
            $table->dropForeign('fk_client_likes_client_id');
        });
    }
}
