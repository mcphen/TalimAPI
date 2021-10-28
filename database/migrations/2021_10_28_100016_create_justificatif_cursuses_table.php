<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJustificatifCursusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('justificatif_cursuses', function (Blueprint $table) {
            $table->id();
            $table->string('intitule');
            $table->string('file_pdf');
            $table->foreignId('cursus_id')
                ->constrained('cursuses')
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
        Schema::dropIfExists('justificatif_cursuses');
    }
}
