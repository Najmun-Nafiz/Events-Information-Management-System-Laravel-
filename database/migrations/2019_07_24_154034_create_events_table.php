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
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('place_id')->unsigned();
            $table->bigInteger('month_id')->unsigned();
            $table->string('title');
            $table->string('date');
            $table->string('address');
            $table->text('short_description');
            $table->text('description');
            $table->string('time');
            $table->string('entry_fee');
            $table->string('participant');
            $table->string('eddition');
            $table->string('image');
            $table->boolean('status');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
            $table->foreign('month_id')->references('id')->on('dates')->onDelete('cascade');
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
