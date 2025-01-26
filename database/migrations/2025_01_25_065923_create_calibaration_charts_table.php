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
        Schema::create('calibaration_charts', function (Blueprint $table) {
            $table->id();
            $table->string('dip_in_mm')->nullable();
            $table->string('qty_in_ltr')->nullable();
            $table->unsignedBigInteger('cat_id')->nullable();

            #Relationship
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calibaration_charts');
    }
};
