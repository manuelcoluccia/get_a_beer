<?php

use App\Models\Beer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
   
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        $beers = ['Lupulus', 'Punk-ipa', 'Hoegaarden', 'Guinness', 'Leffe', 'Duvel', 'Delirium', 'Chouffe', 'La Trappe', 'Bush'];

        foreach($beers as $beer){
            Beer::create([
                'beer'=>$beer
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beers');
    }
}
