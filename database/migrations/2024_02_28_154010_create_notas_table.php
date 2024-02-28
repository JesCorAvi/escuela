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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->foreignId("alumno_id")->constrained("alumnos");
            $table->foreignId("asignatura_id")->constrained("asignaturas");
            $table->integer("trimestre");
            $table->decimal("nota");
            $table->unique(["alumno_id","asignatura_id","trimestre"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
