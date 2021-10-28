<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidats', function (Blueprint $table) {
            $table->string('photo_identite')->nullable();
            //  $table->string('adresse')->nullable();
            $table->string('passport')->nullable();
            $table->string('acte_naissance')->nullable();
            $table->string('cv')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('candidat_news');
    }
}
