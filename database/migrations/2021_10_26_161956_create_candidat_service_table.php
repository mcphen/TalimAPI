<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidat_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidat_id')
                ->constrained('candidats')
                ->onDelete('cascade');

            $table->foreignId('service_id')
                ->constrained('services')
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
        Schema::dropIfExists('candidat_service');
    }
}
