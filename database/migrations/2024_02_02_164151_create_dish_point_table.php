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
        Schema::create('dish_point', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор блюдо_город
            $table->unsignedBigInteger('dish_id'); // Идентификатор блюда
            $table->unsignedBigInteger('point_id'); // Идентификатор города
            $table->boolean('hold_status')->default(false); // Cтатус удержания
            $table->timestamps();

            // Внешние ключи
            $table->foreign('dish_id')->references('id')->on('dishes');
            $table->foreign('point_id')->references('id')->on('points');

            // Уникальный индекс на dish_id и point_id
            $table->unique(['dish_id', 'point_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish_city');
    }
};
