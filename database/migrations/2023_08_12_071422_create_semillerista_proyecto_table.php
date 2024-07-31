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
        Schema::create('semillerista_proyecto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('semillerista_id');
            $table->unsignedBigInteger('proyecto_id');
            $table->timestamps();
    
            $table->foreign('semillerista_id')->references('id')->on('semilleristas')->onDelete('cascade');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semillerista_proyecto');
    }
};
