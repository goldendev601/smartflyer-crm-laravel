<?php

use App\Models\TaskRemindInterval;
use App\Models\TodoStatus;
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

            $table->dropColumn('status');
            $table->dropColumn('remind_on');
            $table->unsignedBigInteger('todo_status_id')->after('details')->default(1)->nullable();
            $table->foreign('todo_status_id')->references('id')->on('todo_statuses')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unsignedBigInteger('task_remind_interval_id')->after('todo_status_id')->nullable();
            $table->foreign('task_remind_interval_id')->references('id')->on('task_remind_intervals')->onDelete('CASCADE')->onUpdate('CASCADE');

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

            $table->dropForeign('todo_todo_status_id_foreign');
            $table->dropForeign('todo_task_remind_interval_id_foreign');
            $table->dropColumn('todo_status_id');
            $table->dropColumn('task_remind_interval_id');
            $table->unsignedBigInteger('status')->default(0);
            $table->string('remind_on');
        });
    }
};
