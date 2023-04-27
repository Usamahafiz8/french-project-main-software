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
        Schema::create('step11', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('lvngspace_total')->nullable();
            $table->json('burial_of_subfloor')->nullable();
            $table->json('housing_shape')->nullable();
            $table->json('low_floor_type')->nullable();
            $table->json('fatwork')->nullable();
            $table->json('lfg_insulation')->nullable();
            $table->string('lfg_insulation_thickness')->nullable();
            $table->string('lfg_btm_floor_area')->nullable();
            $table->string('lfg_insulated_area')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
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
        Schema::dropIfExists('step11');
    }
};
