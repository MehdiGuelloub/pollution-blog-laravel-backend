<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogueurs', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('image');
            $table->integer('active')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('publications', function (Blueprint $table) {
            $table->string('blogueur_id');
        });


        /*Schema::table('commentaires', function (Blueprint $table) {
            $table->integer('blogueur_id')->unsigned();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogueurs');
    }
}
