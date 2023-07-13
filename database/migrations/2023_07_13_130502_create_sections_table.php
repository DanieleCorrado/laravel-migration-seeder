<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table -> id();
            $table -> string('company');
            $table -> string('departure_station');
            $table -> string('arrival_station');
            $table -> time('departure_time');
            $table -> time('arrival_time');
            $table -> integer('number_of_wagons');
            $table -> boolean('in_time');
            $table -> boolean('deleted');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
};
