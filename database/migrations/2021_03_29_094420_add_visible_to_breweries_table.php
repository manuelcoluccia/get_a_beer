<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVisibleToBreweriesTable extends Migration
{
   
    public function up()
    {
        Schema::table('breweries', function (Blueprint $table) {
            $table->boolean('visible')->default(false);
        });
    }

    public function down()
    {
        Schema::table('breweries', function (Blueprint $table) {
            $table->dropColumn('visible');
        });
    }
}
