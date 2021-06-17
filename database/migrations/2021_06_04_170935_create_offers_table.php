<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('description',255);
            $table->double('price',11,2)->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->boolean('status');

            $table->unsignedBigInteger('business_id');
            $table->foreign('business_id')->references('id')->on('businesses')
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
        Schema::dropIfExists('offers');
    }
}
