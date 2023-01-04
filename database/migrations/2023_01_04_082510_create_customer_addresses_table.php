<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('type', 45);
            $table->string('address1', 255);
            $table->string('address2', 255)->nullable();
            $table->string('city', 255);
            $table->string('state', 45)->nullable();
            $table->string('zipcode', 45);
            $table->string('country_code', 3);
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers')
                ->onDelete('cascade');

            $table->foreign('country_code')
                ->references('code')
                ->on('countries')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_addresses');
    }
};
