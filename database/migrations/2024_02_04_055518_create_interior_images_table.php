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
        Schema::create('interior_images', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор
            $table->string('image'); // Изображение
            $table->string('name'); // Название
            $table->unsignedBigInteger('point_id'); // Идентификатор точки
            $table->timestamps(); // Временные метки создания и обновления

            // Внешние ключи
            $table->foreign('point_id')->references('id')->on('points');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interior_images');
    }
};
