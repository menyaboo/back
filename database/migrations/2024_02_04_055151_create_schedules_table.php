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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор
            $table->integer('day_of_week'); // День недели
            $table->time('time_limit'); // Лимит времени
            $table->time('start_time'); // Время начала
            $table->time('end_time'); // Время окончания
            $table->unsignedBigInteger('point_id'); // Идентификатор точки
            $table->timestamps();

            // Внешние ключи
            $table->foreign('point_id')->references('id')->on('points');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_schedules');
    }
};
