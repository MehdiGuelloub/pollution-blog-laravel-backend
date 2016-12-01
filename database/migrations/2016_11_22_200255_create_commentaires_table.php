<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('body');
            
            $table->integer('publication_id');
            $table->string('blogueur_id');

            $table->timestamps();
            $table->foreign('publication_id')->references('id')->on('publications');
            $table->foreign('blogueur_id')->references('id')->on('blogueurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
