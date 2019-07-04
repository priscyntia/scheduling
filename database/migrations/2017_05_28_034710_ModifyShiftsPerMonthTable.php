<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyShiftsPerMonthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('ShiftsPerMonth');
        
        Schema::create('ShiftsPerMonth', function (Blueprint $table) {
            $table->integer('doctorID');
            $table->string('date');
            $table->integer('taipeiShift');
            $table->integer('tamsuiShift');
            $table->integer('internalShift');
            $table->integer('surgicalShift');
            $table->integer('totalShift');
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
        Schema::dropIfExists('ShiftsPerMonth');
        
        Schema::create('ShiftsPerMonth', function (Blueprint $table) {
            $table->integer('doctorID');
            $table->date('date');
            $table->integer('taipeiShift');
            $table->integer('tamsuiShift');
            $table->integer('internalShift');
            $table->integer('surgicalShift');
            $table->integer('totalShift');
            $table->timestamps();
        });
    }
}
