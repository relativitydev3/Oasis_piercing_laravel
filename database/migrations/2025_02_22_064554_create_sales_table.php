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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Cliente');
            $table->string('Apellido_Cliente')->nullable();
            $table->string('Direccion_Cliente');
            $table->string('Ciudad_Cliente')->nullable();
            $table->string('Departamento_Cliente')->nullable();
            $table->string('Barrio_Cliente')->nullable();
            $table->string('Telefono_Cliente')->nullable();
            $table->string('Correo_Cliente')->nullable();
            $table->string('Metodo_pago');
            $table->string('Documento_Cliente')->nullable();
            
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Clave foránea
            $table->string('estado');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
