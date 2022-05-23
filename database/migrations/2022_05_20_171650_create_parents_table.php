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
        Schema::create('parents', function (Blueprint $table) {
            $table->id('ParentsID')->autoIncrement();
            $table->boolean('isParent');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->char('gender');
            $table->string('EducAttain');
            $table->bigInteger('ContactNo');
            $table->string('emailaddress');
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
        Schema::dropIfExists('parents');
    }
};
