<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('language');
            $table->string('title')->unique();
            $table->text('body');
            $table->string('locatie');
            $table->string('organisator');
            $table->string('category');
            $table->text('contact');
            $table->integer('events_id')->unsigned();;
            $table->foreign('events_id')
                    ->references('id')
                    ->on('events')
                    ->onDelete('cascade')->unsigned();

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
        Schema::dropIfExists('events_translations');
    }
}
