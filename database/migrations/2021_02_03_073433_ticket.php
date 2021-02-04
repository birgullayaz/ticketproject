<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ticket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_title');
            $table->string('ticket_country');
            $table->string('ticket_detail');
            $table->string('ticket_importance');
            $table->boolean('ticket_status');
            $table->string('user_email');
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
         Schema::dropIfExists('ticket');
    }
}
