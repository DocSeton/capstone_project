<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('department');
            $table->string('status');
            $table->string('title');
            $table->string('description');
            $table->date('date_from');
            $table->date('date_to');
            $table->time('time_start');
            $table->time('time_end');
            $table->string('venue');
            $table->string('attendance_status');
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
        Schema::dropIfExists('events');
    }
}
