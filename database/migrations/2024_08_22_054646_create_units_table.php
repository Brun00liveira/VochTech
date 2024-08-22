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
        Schema::create('units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trade_name');
            $table->string('legal_name');
            $table->string('cnpj');
            $table->unsignedBigInteger('brands_id');
            $table->timestamps();
            $table->foreign('brands_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
