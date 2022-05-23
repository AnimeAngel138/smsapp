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
        Schema::create('school__histories', function (Blueprint $table) {
            $table->id('SchoolHistoryCode')->autoIncrement();
            $table->integer('schoolID');
            $table->string('SchoolName');
            $table->string('SchoolAddress');
            $table->string('gradelevel');
            $table->string('section');
            $table->string('schoolyear');
            $table->integer('LearnersID');
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
        Schema::dropIfExists('school__histories');
    }
};
