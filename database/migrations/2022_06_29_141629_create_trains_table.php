<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            
            $table->string('company',20);
            $table->string('departures',30);
            $table->string('arrivals',30);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code',10);
            $table->tinyInteger('coach')->unsigned();
            $table->boolean('in_time')->default(1);
            $table->boolean('deleted')->default(0);

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
        Schema::dropIfExists('trains');
    }
}
