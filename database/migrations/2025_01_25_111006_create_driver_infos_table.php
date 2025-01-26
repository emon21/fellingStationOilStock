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
        Schema::create('driver_infos', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name')->nullable();
            $table->string('driver_mob_no')->nullable();
            $table->string('driver_dip_require')->nullable();
            $table->string('driver_present_dip')->nullable();
            $table->string('veichale_no')->nullable();
            $table->string('inv_no')->nullable();
            $table->string('pay_of_name')->nullable()->default('cash');
            $table->string('pay_of_tk')->nullable();
            $table->string('pay_of_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_infos');
    }
};
