<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2021_06_11_222559_create_businesses__table.php
            $table->string('name',100);
=======

            $table->string('name',50);
>>>>>>> 277065a0dbd1dc16f84174626313bb83a5eb1573:database/migrations/2021_06_11_224249_create_businesses_table.php
            $table->string('slogan',100)->nullable();
            $table->text('description',500)->nullable();
            $table->string('ruc',11)->nullable();
            $table->string('phone',12);
            $table->boolean('status');
<<<<<<< HEAD:database/migrations/2021_06_11_222559_create_businesses__table.php
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                                                        ->onDelete('cascade');
=======

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

>>>>>>> 277065a0dbd1dc16f84174626313bb83a5eb1573:database/migrations/2021_06_11_224249_create_businesses_table.php
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
        Schema::dropIfExists('businesses');
    }
}