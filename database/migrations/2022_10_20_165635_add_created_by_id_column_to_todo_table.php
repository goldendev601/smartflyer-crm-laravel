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
        Schema::table('todo', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->index('created_by_id','fk_todo_created_by_id');
            $table->foreign('created_by_id','fk_todo_created_by_id')
                ->references(['id'])->on('users')->onUpdate('NO ACTION')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('todo', function (Blueprint $table) {
            $table->dropForeign('fk_todo_created_by_id');
            $table->dropColumn('created_by_id');
        });
    }
};