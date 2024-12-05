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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->longText('texto'); // o name do input deve ser o mesmo da coluna aqui.
            $table->unsignedBigInteger('post_id'); // criação da chave estrangeira
            $table->foreign('post_id')->references('id')->on('post'); // referenciação da chave estrangeira com a outra tabela.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
