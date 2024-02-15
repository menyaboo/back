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
        Schema::create('promotion_clients', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор
            $table->unsignedBigInteger('promotion_id'); // Идентификатор акции
            $table->unsignedBigInteger('clients_id'); // Идентификатор клиента
            $table->timestamps(); // Временные метки создания и обновления

            // Внешние ключи
            $table->foreign('promotion_id')->references('id')->on('promotions');
            $table->foreign('clients_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_clients');
    }
};
