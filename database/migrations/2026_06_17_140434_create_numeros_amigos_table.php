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
        Schema::create('numeros_amigos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('numero1');
            $table->integer('numero2');
            $table->boolean('son_amigos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('numeros_amigos');
    }
};
