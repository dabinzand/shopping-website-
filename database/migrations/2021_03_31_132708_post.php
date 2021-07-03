<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //labo add krdna yan dastkare krdn 
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('sizes');
            $table->string('price');
            $table->longText('image');
            $table->foreignId('userid');
            $table->text('details');
         
    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()/// labo rash krdnawa w aw shtananbakar det
    {
        //
    }
}
