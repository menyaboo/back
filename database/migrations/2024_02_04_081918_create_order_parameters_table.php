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
        Schema::create('order_parameters', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор
            $table->decimal('amount', 8, 2); // Сумма заказа
            $table->integer('sweetness')->default(0); // Сладость
            $table->boolean('temperature')->default(false); // Температура
            $table->unsignedBigInteger('dish_id'); // Идентификатор блюда
            $table->unsignedBigInteger('order_id'); // Идентификатор заказа
            $table->unsignedBigInteger('volume_id'); // Идентификатор объема
            $table->timestamps(); // Временные метки создания и обновления

            // Внешние ключи
            $table->foreign('dish_id')->references('id')->on('dishes');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('volume_id')->references('id')->on('volumes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_parameters');
    }
};
