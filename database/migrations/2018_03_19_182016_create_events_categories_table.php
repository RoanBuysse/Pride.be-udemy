<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slugNl')->unique()->index();
            $table->string('slugFr')->unique()->index();
            $table->string('slugEn')->unique()->index();
            $table->string('nameNl');
            $table->string('nameFr');
            $table->string('nameEn');
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
        Schema::dropIfExists('events_categories');
    }
}
