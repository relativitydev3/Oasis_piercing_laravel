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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
        $table->foreignId('material_id')->nullable()->constrained('materials')->onDelete('set null');
            $table->string('precio');
            $table->integer('stock');
            $table->string('imagen')->nullable(); // Permitir que pueda estar vacío
            $table->string('descripcion')->nullable(); // Permitir que no esté lleno
            $table->foreignId('estado_id')->constrained('product_status')->onDelete('cascade'); // Clave foránea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
