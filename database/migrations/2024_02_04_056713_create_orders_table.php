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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор
            $table->timestamp('ready_time')->nullable(); // Время готовности
            $table->decimal('total_cost', 8, 2); // Общая стоимость
            $table->string('comment'); // Комментарий
            $table->unsignedBigInteger('client_id'); // Идентификатор клиента
            $table->unsignedBigInteger('point_id'); // Идентификатор клиента
            $table->unsignedBigInteger('type_connection_id'); // Идентификатор заказа
            $table->timestamps();

            // Внешние ключи
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('point_id')->references('id')->on('points');
            $table->foreign('type_connection_id')->references('id')->on('type_connections');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
