<?php

use App\ModelsExtended\Notification;
use App\ModelsExtended\User;
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
        Schema::create('user_notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('notification_id');
            $table->foreign('user_id')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('notification_id')->references(['id'])->on('notifications')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->boolean('permission')->default(false);
            $table->timestamps();
        });

        $this->createForOldCustomers();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_notifications');
    }

    public function createForOldCustomers()
    {
        $users = User::all();
        foreach ($users as $user) {
            (new \App\Jobs\SetUserNotification($user))->handle();
        }
    }
};
