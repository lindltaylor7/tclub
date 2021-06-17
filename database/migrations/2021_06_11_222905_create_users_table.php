<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name',50);
            $table->string('telefono',12)->nullable();
            $table->string('email',50);
            $table->string('password',255);
            $table->string('type',20);
            $table->boolean('status',1);

            $table->unsignedBigInteger('role_id');
            
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');


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
        Schema::dropIfExists('users');
    }
}
