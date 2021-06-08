<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            
            $table->string('street',50);
            $table->string('number',10)->nullable();
            $table->string('district',50);
            $table->unsignedBigInteger('adressable_id');
            $table->string('adressable_type');

            $table->primary(['adressable_id','adressable_type']);

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')
                                                        ->onDelete('cascade');
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
        Schema::dropIfExists('adresses');
    }
}
