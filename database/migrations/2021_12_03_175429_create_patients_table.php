<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->default('text'); /* por bug */
            $table->string('oximetria', 100)->nullable()->default('text');
            $table->string('frec_respiratoria', 100)->nullable()->default('text');
            $table->string('frec_cardiaca', 100)->nullable()->default('text');
            $table->string('temperatura', 100)->nullable()->default('text');
            $table->string('presion_arterial', 100)->nullable()->default('text');
            $table->string('glicemias', 100)->nullable()->default('text');
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
        Schema::dropIfExists('patients');
    }
}
