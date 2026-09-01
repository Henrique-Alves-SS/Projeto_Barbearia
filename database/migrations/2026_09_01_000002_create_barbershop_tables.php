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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone')->nullable();
            $table->string('email')->nullable()->unique();
            $table->date('data_nascimento')->nullable();
            $table->text('observacoes')->nullable();
            $table->timestamps();
        });

        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cargo');
            $table->string('telefone')->nullable();
            $table->string('email')->nullable()->unique();
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });

        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->decimal('preco', 10, 2);
            $table->unsignedInteger('duracao_minutos');
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });

        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('categoria')->nullable();
            $table->string('sku')->nullable()->unique();
            $table->integer('estoque')->default(0);
            $table->decimal('preco_custo', 10, 2)->default(0);
            $table->decimal('preco_venda', 10, 2)->default(0);
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });

        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->cascadeOnDelete();
            $table->foreignId('funcionario_id')->constrained('funcionarios')->cascadeOnDelete();
            $table->foreignId('servico_id')->constrained('servicos')->cascadeOnDelete();
            $table->dateTime('data_agendamento');
            $table->enum('status', ['pendente', 'confirmado', 'concluido', 'cancelado'])->default('pendente');
            $table->decimal('valor_total', 10, 2)->default(0);
            $table->text('observacoes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
        Schema::dropIfExists('produtos');
        Schema::dropIfExists('servicos');
        Schema::dropIfExists('funcionarios');
        Schema::dropIfExists('clientes');
    }
};
