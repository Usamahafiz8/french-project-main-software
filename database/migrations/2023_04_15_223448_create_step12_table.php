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
        Schema::create('step12', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->json('ventillation')->nullable();
            $table->string('no_pieces')->nullable();
            $table->string('no_bathrooms')->nullable();
            $table->json('energy')->nullable();
            $table->json('generator')->nullable();
            $table->json('year')->nullable();
            $table->string('rated_p')->nullable();
            $table->string('yield_p_nominal')->nullable();
            $table->json('plcd_in_heated_vol')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('step12');
    }
};
