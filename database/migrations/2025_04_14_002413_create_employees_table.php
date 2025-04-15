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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('number_of_employees');
            $table->string('name');
            $table->string('national_id');
            $table->string('phone');
            $table->string('family_phone_number');
            $table->string('family_status');
            $table->string('biological_mothers_name');
            $table->string('blood_type');
            $table->string('npwp')->nullable();
            $table->string('email');

            $table->text('address');
            $table->string('address_province');
            $table->string('address_city');
            $table->string('address_district');
            $table->string('address_village');
            $table->string('address_rt');
            $table->string('address_rw');

            $table->string('residence');
            $table->text('address_domicile');

            $table->string('marital_status');
            $table->string('spouse_name')->nullable();

            $table->integer('number_of_children')->nullable();
            $table->string('children_name')->nullable();
            $table->date('children_birth_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
