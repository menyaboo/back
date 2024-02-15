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
        Schema::create('category_supplements', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор категории
            $table->string('name'); // Название категории
            $table->timestamps(); // Временные метки создания и обновления
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_supplements');
    }
};
