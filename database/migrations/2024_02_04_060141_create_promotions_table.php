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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор
            $table->string('name');  // Название
            $table->text('description'); // Описание
            $table->string('background')->nullable(); // Фон
            $table->string('image')->nullable(); // Изображение
            $table->timestamps(); // Временные метки создания и обновления
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
