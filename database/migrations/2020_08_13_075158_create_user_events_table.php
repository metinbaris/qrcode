<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEventsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('user_events', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('event_id');
            $table->string('email_token');
            $table->dateTime('email_verified_at')->nullable();
            $table->dateTime('qrcode_verified_at')->nullable();
            $table->timestamps();

            $table->primary(['user_id', 'event_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('event_id')->references('id')->on('company_events');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_events');
    }
}
