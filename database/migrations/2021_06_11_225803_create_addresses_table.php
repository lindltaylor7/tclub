<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2021_06_17_021111_create_category_city_table.php
class CreateCategoryCityTable extends Migration
=======
class CreateAddressesTable extends Migration
>>>>>>> 277065a0dbd1dc16f84174626313bb83a5eb1573:database/migrations/2021_06_11_225803_create_addresses_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2021_06_17_021111_create_category_city_table.php
        Schema::create('category_city', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
=======
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->string('street',50);
            $table->string('number',10);
            $table->string('district',50);

>>>>>>> 277065a0dbd1dc16f84174626313bb83a5eb1573:database/migrations/2021_06_11_225803_create_addresses_table.php
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('business_id');

<<<<<<< HEAD:database/migrations/2021_06_17_021111_create_category_city_table.php
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
=======
>>>>>>> 277065a0dbd1dc16f84174626313bb83a5eb1573:database/migrations/2021_06_11_225803_create_addresses_table.php
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');

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
<<<<<<< HEAD:database/migrations/2021_06_17_021111_create_category_city_table.php
        Schema::dropIfExists('category_city');
=======
        Schema::dropIfExists('addresses');
>>>>>>> 277065a0dbd1dc16f84174626313bb83a5eb1573:database/migrations/2021_06_11_225803_create_addresses_table.php
    }
}
