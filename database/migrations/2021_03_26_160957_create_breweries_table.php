<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreweriesTable extends Migration
{
    
    public function up()
    {
        Schema::create('breweries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 160);
            $table->text('description');
            $table->string('city');
            $table->string('address');
            $table->string('beers')->nullable();
            $table->string('img');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('breweries');
    }
}
