<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email', 250)->nullable();
            $table->string('name', 150)->nullable(false)->unique('uq_agent_unique');
            $table->string('weblink', 350)->nullable();
            $table->string('address', 350)->nullable();
            $table->string('image_url', 350)->nullable();
            $table->string('phone_number', 50)->nullable();
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
        Schema::dropIfExists('agent');
    }
}
