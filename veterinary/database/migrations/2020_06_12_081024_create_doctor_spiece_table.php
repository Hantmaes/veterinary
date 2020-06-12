<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorSpieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_spiece', function (Blueprint $table) {
            
            $table->unsignedInteger('doctor_id');
            $table->unsignedInteger('spiece_id');

            $table->unique('doctor_id', 'spiece_id');
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
        Schema::dropIfExists('doctor_spiece');
    }
}
