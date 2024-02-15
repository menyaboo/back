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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор блюда
            $table->string('name'); // Название блюда
            $table->string('unit'); // Единица измерения
            $table->string('image')->nullable(); // Фотография блюда
            $table->text('description')->nullable(); // Описание блюда
            $table->text('composition'); // Описание блюда
            $table->integer('energy_value')->nullable(); // Энергетическая ценность
            $table->decimal('proteins', 6, 2)->nullable(); // Белки
            $table->decimal('fats', 6, 2)->nullable(); // Жиры
            $table->decimal('carbohydrates', 6, 2)->nullable(); // Углеводы
            $table->unsignedBigInteger('category_dish_id'); // Идентификатор категории
            $table->timestamps(); // Временные метки создания и обновления

            // Внешние ключи
            $table->foreign('category_dish_id')->references('id')->on('category_dishes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
