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
        Schema::create('inquiry_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inquiry_id');
            $table->foreign('inquiry_id')->references(['id'])->on('inquiries')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->string('name', 300);
            $table->string('email');
            $table->tinyInteger('type_of_business');
            $table->tinyInteger('worked_with_sf')->nullable();
            $table->string('other_travel_agency')->nullable();
            $table->float('commission_percentage_offer')->nullable();
            $table->string('commission_handled')->nullable();
            $table->text('current_booking_way')->nullable();
            $table->tinyInteger('member_of_virtuoso')->nullable();
            $table->tinyInteger('interested_in_learning')->nullable();
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
        Schema::dropIfExists('inquiry_details');
    }
};
