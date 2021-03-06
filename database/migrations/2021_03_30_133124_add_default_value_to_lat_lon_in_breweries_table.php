<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultValueToLatLonInBreweriesTable extends Migration
{
   
    public function up()
    {
        Schema::table('breweries', function (Blueprint $table) {
            $table->decimal('lat',10,8)->default(0)->change();
            $table->decimal('lon',11,8)->default(0)->change();
        });
    }

  
    public function down()
    {
        Schema::table('breweries', function (Blueprint $table) {
            $table->decimal('lat',10,8)->change();
            $table->decimal('lon',11,8)->change();
        });
    }
}
