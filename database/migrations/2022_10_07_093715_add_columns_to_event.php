<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_event', function (Blueprint $table) {
            $table->text('notes')->nullable();
            $table->dropColumn('email')->nullable();
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
            $table->dropColumn('notes');
            $table->string('email')->nullable();
        });
    }
};
