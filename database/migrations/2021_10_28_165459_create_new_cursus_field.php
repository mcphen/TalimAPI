<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewCursusField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cursuses', function (Blueprint $table) {
            $table->string('serie')->nullable();
            $table->string('titre_formation')->nullable();
            $table->string('type_formation')->nullable();
            $table->string('intitule_diplome')->nullable();
            $table->string('type_diplome')->nullable();
            //  $table->string('adresse')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('new_cursus_field');
    }
}
