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
        Schema::create('dish_supplement', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор
            $table->unsignedBigInteger('dish_id'); // Идентификатор блюда
            $table->unsignedBigInteger('supplement_id'); // Идентификатор категории
            $table->timestamps(); // Временные метки создания и обновления

            // Внешние ключи
            $table->foreign('dish_id')->references('id')->on('dishes');
            $table->foreign('supplement_id')->references('id')->on('supplements');

            $table->unique(['dish_id', 'supplement_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish_supplement');
    }
};
