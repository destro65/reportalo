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
        Schema::create('dias', function (Blueprint $table) {
            $table->id();                                    
            $table->time('hora')->useCurrent();
            $table->timestamps();                        
            $table->bigInteger('serie35');
            $table->bigInteger('serie17');
            $table->bigInteger('serie10');
            $table->bigInteger('vendidos');
            // $table->date('fecha_id');
            // $table->foreign('fecha_id')->references('fecha')->on('registros');
            $table->foreignId('estimado_id')->constrained('estimados');
            $table->foreignId('registro_id')->constrained('registros')->cascadeOnDelete();        
                      
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dias');
    }
};
