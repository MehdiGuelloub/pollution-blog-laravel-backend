<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image');
            $table->integer('nb_likes')->default(0);
            $table->integer('nb_dislikes')->default(0);
            $table->integer('nb_comments')->default(0);
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });

        /*Schema::table('commentaires', function (Blueprint $table) {
            $table->integer('publication_id')->unsigned();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
