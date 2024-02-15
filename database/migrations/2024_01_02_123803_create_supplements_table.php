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
        Schema::create('supplements', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор добавки
            $table->string('name'); // Название добавки
            $table->decimal('cost', 6, 2)->nullable(); // Изображение категории
            $table->unsignedBigInteger('category_supplement_id'); // Идентификатор категории
            $table->timestamps(); // Временные метки создания и обновления

            // Внешние ключи
            $table->foreign('category_supplement_id')->references('id')->on('category_supplements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplements');
    }
};
