<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('sex');
            $table->dateTime('dob');
            $table->string('region_code');
            $table->string(column: 'province_code');
            $table->string('city_municipality_code');
            $table->string('barangay_code');
            // $table->foreign('region_code')->references('region_code')->on('regions');
            // $table->foreign('province_code')->references('province_code')->on('provinces');
            // $table->foreign('city_municipality_code')->references('city_municipality_code')->on('cities');
            // $table->foreign('barangay_code')->references('barangay_code')->on('barangays');
            $table->string(column: 'house_number');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('user_type');
            $table->string('valid_id');
            $table->string('documents');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
