<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavouriteablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('favouriteables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('events_id');
            $table->string('favouriteable_type')->nullable(); 
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
        Schema::dropIfExists('favouriteables');
    }
}
