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
        Schema::create('step2', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->json('low_floor_type')->nullable();
            $table->json('bigwork')->nullable();
            $table->json('lfg_insulation')->nullable();
            $table->string('insulation_thickness')->nullable();
            $table->string('crawlers_surface')->nullable();
            $table->string('exterior_ceiling')->nullable();
            $table->json('attic_area')->nullable();
            $table->string('attic_area_val')->nullable();
            $table->string('photo')->nullable();
            $table->string('hf_photo1')->nullable();
            $table->string('hf_photo2')->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('step2');
    }
};
