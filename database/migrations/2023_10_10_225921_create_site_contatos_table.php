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
        Schema::create('site_contatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('telefone', 20);
            $table->string('email', 80);
            $table->set('motivo_contato', [1,2,3]);
            $table->text('mensagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_contatos');
    }
};
