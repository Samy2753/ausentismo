<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absenteeism', function (Blueprint $table) {
            $table->id();
            $table->string('NameEmployeer');
            $table->string('DocumentType');
            $table->String('DocumentNumber');
            $table->date('Start_date');
            $table->date('End_date');
            $table->unsignedBigInteger('Incapacity_type_id');
            $table->foreign('Incapacity_type_id')->references('id')->on('absenteeism')->onDelete('cascade');
            $table->string('Clasification');
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
        Schema::dropIfExists('absenteeism');
    }
};
