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
        Schema::create('oil_stocks', function (Blueprint $table) {
            $table->id();
            $table->string('tank_name')->nullable();
            $table->string('tank_no')->nullable();
            $table->string('matien_no')->nullable();
            $table->string('last_reading')->nullable();
            $table->string('fast_reading')->nullable();

            $table->string('fast_dip')->nullable();
            $table->string('fast_qty')->nullable();
            $table->string('last_dip')->nullable();
            $table->string('last_qty')->nullable();

            // $table->string('sell')->nullable();
            // $table->string('total_sell')->nullable();
            // $table->string('quantity_of_poured_oil')->nullable();
            // $table->string('+/-')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oil_stocks');
    }
};
