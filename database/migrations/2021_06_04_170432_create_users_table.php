<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

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
            $table->string('phone',12)->nullable();
            $table->string('email',50)->unique();
            $table->string('password',255);
            $table->string('type',50);
            $table->boolean('status');
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('business_id');

            $table->foreign('rol_id')
                    ->references('id')->on('rols')->onDelete('cascade');
            $table->foreign('business_id')
                    ->references('id')->on('businesses')->onDelete('cascade');
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
