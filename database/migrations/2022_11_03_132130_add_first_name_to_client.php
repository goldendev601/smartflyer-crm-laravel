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
        // Broke this into 2 because I need the first_name in database executed for next part
        Schema::table('client', function (Blueprint $table) {
            $table->renameColumn('name', 'first_name');
        });

        Schema::table('client', function (Blueprint $table) {
            $table->string('middle_name')->after('first_name')->nullable();
            $table->string('last_name')->after('middle_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client', function (Blueprint $table) {
            $table->renameColumn('first_name', 'name');
            $table->dropColumn('middle_name');
            $table->dropColumn('last_name');
        });
    }
};
