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
        Schema::create('estudiantes', function (Blueprint $table) {
        $table->id('codigo', 20);
        $table->string('nombres', 100);
        $table->string('apellidos', 100);
        $table->string('celular', 20);
        $table->binary('dni'); // para cifrado
        $table->binary('correo'); // para cifrado
        $table->string('universidad', 100);
        $table->boolean('miembro_whatsapp');
        $table->enum('tipo_comprobante', ['Boleta', 'Factura']);
        $table->string('ruc_factura', 11)->nullable();
        $table->string('ruta_voucher')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
