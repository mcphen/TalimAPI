<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversityNewField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('universities', function (Blueprint $table) {
            $table->foreignId('ville_id')
                ->constrained('villes')
                ->onDelete('cascade');

            $table->foreignId('pays_id')
                ->constrained('pays')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('university_new_field');
    }
}
