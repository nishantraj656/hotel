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
        Schema::table('hotels',function(Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('cities')->constrained()->restrictOnDelete();
            $table->foreign('province_id')->references('id')->on('provinces')->constrained()->restrictOnDelete();
            $table->foreign('chaine_id')->references('id')->on('chains')->constrained()->restrictOnDelete();
        });

        Schema::table('trees',function(Blueprint $table) {
            $table->foreign('tree_type_id')->references('id')->on('tree_types')->constrained()->restrictOnDelete();
            $table->foreign('costumer_id')->references('id')->on('costumers')->constrained()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels',function(Blueprint $table) {
            $table->dropForeign(['city_id','province_id','chaine_id']);
        });
        Schema::table('trees',function(Blueprint $table) {
            $table->dropForeign(['tree_type_id','costumer_id']);
        });
    }
};
