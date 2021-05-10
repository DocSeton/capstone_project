<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_links', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('event');
            $table->string('college');
            $table->string('description');
            $table->string('duration');
            $table->string('time');
            $table->string('venue');
            $table->string('link');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('gallery_links');
    }
}
