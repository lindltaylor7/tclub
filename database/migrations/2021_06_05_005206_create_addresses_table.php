<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {

            $table->string('street',50);
            $table->string('number',10);
            $table->string('district',50);
            $table->unsignedBigInteger('addressable_id');
            $table->string('addressable_type');
            $table->unsignedBigInteger('city_id');

            $table->primary(['addressable_id', 'addressable_type']);
            $table->foreign('city_id')
                    ->references('id')->on('cities')->onDelete('cascade');

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
        Schema::dropIfExists('addresses');
    }
}
