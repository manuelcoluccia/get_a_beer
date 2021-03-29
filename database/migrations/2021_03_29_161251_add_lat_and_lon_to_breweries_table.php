<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLatAndLonToBreweriesTable extends Migration
{
    
    public function up()
    {
        Schema::table('breweries', function (Blueprint $table) {
            $table->decimal('lat',10,8);
            $table->decimal('lon',11,8);
        });
    }

    public function down()
    {
        Schema::table('breweries', function (Blueprint $table) {
            $table->dropColumn('lat' , 'lon');
        });
    }
}
