<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
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
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('news');
    }
}
