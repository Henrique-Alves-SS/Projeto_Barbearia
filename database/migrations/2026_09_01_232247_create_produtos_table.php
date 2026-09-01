<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Mantida vazia para evitar conflito com a tabela produtos já criada
        // na migration principal da barbearia.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Nenhuma ação necessária.
    }
};
