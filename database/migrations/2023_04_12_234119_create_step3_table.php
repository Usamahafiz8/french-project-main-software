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
        Schema::create('step3', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->json('rock')->nullable();
            $table->json('concrete')->nullable();
            $table->json('brick')->nullable();
            $table->json('earth')->nullable();
            $table->json('drink')->nullable();
            $table->string('wall_thickness')->nullable();
            $table->json('insulation')->nullable();
            $table->string('thickness')->nullable();
            $table->json('facade_orientation')->nullable();
            $table->string('height')->nullable();
            $table->string('length')->nullable();
            $table->string('surface')->nullable();
            $table->string('adjoining_area')->nullable();
            $table->string('area2')->nullable();
            $table->string('area3')->nullable();
            $table->string('area4')->nullable();
            $table->string('t_srfc_area')->nullable();
            $table->json('srfc_insulator_Type')->nullable();
            $table->string('area_tobe_insltd')->nullable();
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
        Schema::dropIfExists('step3');
    }
};
