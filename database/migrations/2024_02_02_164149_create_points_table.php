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
        Schema::create('points', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор
            $table->string('street'); // Улица
            $table->string('house'); // Дом
            $table->string('telephone', 11);  // Токен
            $table->string('image_map')->nullable(); // Изображение
            $table->unsignedBigInteger('city_id');  // Идентификатор города
            $table->timestamps(); // Временные метки создания и обновления

            // Внешние ключи
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('points');
    }
};
