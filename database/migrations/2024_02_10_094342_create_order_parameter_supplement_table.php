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
        Schema::create('order_parameter_supplement', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор
            $table->unsignedBigInteger('order_parameter_id'); // Идентификатор заказа
            $table->unsignedBigInteger('supplement_id'); // Идентификатор добавки
            $table->timestamps();

            // Внешние ключи
            $table->foreign('order_parameter_id')->references('id')->on('order_parameters');
            $table->foreign('supplement_id')->references('id')->on('supplements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_parameter_supplement');
    }
};
