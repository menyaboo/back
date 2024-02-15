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
        Schema::create('city_promotion', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор
            $table->unsignedBigInteger('city_id'); // Идентификатор города
            $table->unsignedBigInteger('promotion_id'); // Идентификатор акции
            $table->timestamps(); // Временные метки создания и обновления

            // Внешние ключи
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city_promotion');
    }
};
