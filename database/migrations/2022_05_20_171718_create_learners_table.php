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
        Schema::create('learners', function (Blueprint $table) {
            $table->id('LearnerID')->autoIncrement();
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('extensionName')->nullable();
            $table->string('typeleaners');
            $table->string('gradelevel');
            $table->boolean('withLRN');
            $table->bigInteger('LRN')->nullable();
            $table->date('birthdate');
            $table->char('gender');
            $table->string('nationality');
            $table->string('religion');
            $table->string('motherTongue');
            $table->boolean('isIP');
            $table->string('typeIP')->nullable();
            $table->longText('address');
            $table->boolean('isPWD');
            $table->string('typePWD')->nullable();
            $table->integer('ParentID');
            $table->integer('Section_Code');
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
        Schema::dropIfExists('learners');
    }
};
