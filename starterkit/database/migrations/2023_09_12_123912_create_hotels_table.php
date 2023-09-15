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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->string('img')->nullable();
            $table->string('company_name');
            $table->string('fiscal_code')->unique();
            $table->string('vat_number')->unique();
            $table->string('address_1');
            $table->string('address_2');
            $table->foreignId('city_id');
            $table->foreignId('province_id');
            $table->string('username');
            $table->string('password');
            $table->foreignId('chaine_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
