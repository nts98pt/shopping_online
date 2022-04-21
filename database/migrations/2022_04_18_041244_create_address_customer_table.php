<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_customer', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('district');
            $table->string('address_detail');
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
        Schema::dropIfExists('address_customer');
    }
}
