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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 300);
            $table->string('email');
            $table->string('business_type', 300)->nullable();
            $table->tinyInteger('smartflyer_agreement')->default(0);
            $table->tinyInteger('elevate_agreement')->default(0);
            $table->unsignedBigInteger('inquiry_status_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inquiries');
    }
};
