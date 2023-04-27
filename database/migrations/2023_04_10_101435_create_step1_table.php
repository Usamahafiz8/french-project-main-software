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
        Schema::create('step1', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('aud_f_name')->nullable();
            $table->date('aud_visit_date')->nullable();
            $table->string('aud_statemnt_no')->nullable();
            $table->string('people_in_hearth')->nullable();
            $table->string('tax_income')->nullable();
            $table->date('construction_date')->nullable();
            $table->string('altitude')->nullable();
            $table->string('occupancy_accomodation')->nullable();
            $table->string('winter_comfortlevel')->nullable();
            $table->string('summer_comfortlevel')->nullable();
            $table->json('client_goals')->nullable();
            $table->json('heatingmode_change')->nullable();
            $table->json('isolation_gesture_type')->nullable();
            $table->string('isolation_gesture_val')->nullable();

            $table->json('low_floor_type')->nullable();
            $table->string('low_floor_val')->nullable();
            $table->json('lost_attics_type')->nullable();
            $table->string('lost_attics_val')->nullable();
            $table->json('crawlers_type')->nullable();
            $table->string('crawlers_val')->nullable();
            $table->json('tdynamic_baloon_type')->nullable();
            $table->string('tdynamic_baloon_val')->nullable();
            $table->json('waterheater_type')->nullable();
            $table->string('waterheater_val')->nullable();
            $table->string('ventilation_sys_installation')->nullable();
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
        Schema::dropIfExists('step1');
    }
};
