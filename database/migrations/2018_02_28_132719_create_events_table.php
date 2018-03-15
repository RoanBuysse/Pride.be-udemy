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
            $table->time('time');
            $table->text('organisor');
            //nl
           
            $table->string('titleNl')->unique();
            $table->text('bodyNl');
            $table->text('CategorieNl');

      
            
            //fr
          
            $table->string('titleFr')->unique();
            $table->text('bodyFr');
            $table->text('CategorieFr');
           
            //eng
           
            $table->string('titleEn')->unique();
            $table->text('bodyEn');
            $table->text('CategorieEn');
         
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
