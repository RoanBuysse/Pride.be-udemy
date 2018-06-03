<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->date('date');
            $table->text('location');
            $table->time('time');
            $table->integer('organisor_id')->nullable();
            //nl
           
            $table->string('titleNl')->unique();
            $table->text('bodyNl');
           
      
            
            //fr
          
            $table->string('titleFr')->unique();
            $table->text('bodyFr');
            
            //eng
           
            $table->string('titleEn')->unique();
            $table->text('bodyEn');
            
         
            $table->integer('photo_id')->nullable();
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
