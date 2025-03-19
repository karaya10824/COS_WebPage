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
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // id autoincremental
            $table->string('nombre_producto');
            $table->string('descripcion');
            $table->integer('id_categoria');
            $table->integer('cantidad');
            $table->string('imagen');
            $table->decimal('precio_costo', 8, 2);
            $table->decimal('precio_venta', 8, 2);
            $table->decimal('precio_por_mayor', 8, 2);
            $table->boolean('activo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
