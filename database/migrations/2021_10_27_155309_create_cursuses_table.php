<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursuses', function (Blueprint $table) {
            $table->id();
            $table->string('annee_academique');
            $table->string('pays');
            $table->string('ville');
            $table->string('etablissement');
            $table->string('domaine')->nullable();
            $table->string('diplome')->nullable();
            $table->float('moyenne')->nullable();
            $table->string('mention')->nullable();
            $table->text('commentaire');
            $table->integer('type_cursus');
            $table->string('niveau')->nullable();
            $table->foreignId('candidat_id')
                ->constrained('candidats')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursuses');
    }
}
