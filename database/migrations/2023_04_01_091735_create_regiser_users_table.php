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
        Schema::create('regiser_users', function (Blueprint $table) {
            $table->id();
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('email',50);
            $table->date('date')->nullable();
            $table->enum('gender', ["Male","Female","Other"])->nullable();
            $table->string('phone');
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
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
        Schema::dropIfExists('regiser_users');
    }
};
