<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prefix');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname');
            $table->string('religion');
            $table->string('degree');
            $table->string('school');
            $table->string('email');
            $table->string('tel',10);
            $table->string('disease');
            $table->string('food');
            $table->string('line');
            $table->string('facebook');
            $table->enum('appointment', [0, 1, 2, 3, 4, 5]);
            $table->string('parent',10);
            $table->boolean('exam');
            $table->boolean('walkin')->default(0);
            $table->enum('round', [1, 2, 3]);
            $table->timestamp('saturday')->nullable();
            $table->timestamp('sunday')->nullable();
            $table->timestamp('saturday_checkout')->nullable();
            $table->timestamp('sunday_checkout')->nullable();

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
        Schema::dropIfExists('register');
    }
}
