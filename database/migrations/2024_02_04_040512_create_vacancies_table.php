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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор вакансии
            $table->string('name'); // Название вакансии
            $table->text('description'); // Описание вакансии
            $table->string('image'); // Изображение вакансии
            $table->unsignedBigInteger('city_id'); // Идентификатор города
            $table->timestamps();

            // Внешние ключи
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
