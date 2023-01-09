<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_contact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 300);
            $table->string('email');
            $table->date('date_of_birth')->nullable();
            $table->unsignedBigInteger('relationship_type_id')->index('fk_client_contact_relationship_type_id');
            $table->unsignedBigInteger('client_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->unique(['client_id', 'email'], 'uq_client_contact_client_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_contact');
    }
}
