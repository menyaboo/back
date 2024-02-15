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
        Schema::create('volumes', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор объема
            $table->decimal('meaning', 5, 2); // Значение объема
            $table->decimal('cost', 5, 2); // Стоимость
            $table->unsignedBigInteger('dish_id'); // Идентификатор блюда
            $table->timestamps(); // Временные метки создания и обновления

            // Внешние ключи
            $table->foreign('dish_id')->references('id')->on('dishes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volumes');
    }
};
