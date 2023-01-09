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
        Schema::table('client', function (Blueprint $table) {
            $table->string('address', 250)->nullable();
            $table->string('profile_picture_relative_url', 250)->nullable();
            $table->text('likes')->nullable();
            $table->text('dislikes')->nullable();
        });
        Schema::dropIfExists('client_likes');
        Schema::dropIfExists('client_dislikes');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('profile_picture_relative_url');
            $table->dropColumn('likes');
            $table->dropColumn('dislikes');
        });

        Schema::create('client_dislikes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description', 150);
            $table->unsignedBigInteger('client_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->unique(['client_id', 'description'], 'uq_client_dislikes_client_id');
        });

        Schema::table('client_dislikes', function (Blueprint $table) {
            $table->foreign(['client_id'], 'fk_client_dislikes_client_id')->references(['id'])->on('client')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });

        Schema::create('client_likes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description', 150);
            $table->unsignedBigInteger('client_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->unique(['client_id', 'description'], 'uq_client_likes_client_id');
        });

        Schema::table('client_likes', function (Blueprint $table) {
            $table->foreign(['client_id'], 'fk_client_likes_client_id')->references(['id'])->on('client')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }
};
