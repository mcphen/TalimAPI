<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatNewsFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidats', function (Blueprint $table) {
            $table->string('tel')->nullable();
          //  $table->string('adresse')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('pays_residence')->nullable();
            $table->string('nom_pere')->nullable();
            $table->string('firstname_pere')->nullable();
            $table->string('nom_mere')->nullable();
            $table->string('firstname_mere')->nullable();
            $table->string('sexe')->nullable();
            $table->string('etablissement')->nullable();
            $table->string('niveau_scolaire')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     //   Schema::dropIfExists('candidat_news_fields');
    }
}
