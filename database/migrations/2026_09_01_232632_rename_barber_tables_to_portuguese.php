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
        if (Schema::hasTable('barber_clients') && ! Schema::hasTable('clientes')) {
            Schema::rename('barber_clients', 'clientes');
        }

        if (Schema::hasTable('barber_employees') && ! Schema::hasTable('funcionarios')) {
            Schema::rename('barber_employees', 'funcionarios');
        }

        if (Schema::hasTable('barber_services') && ! Schema::hasTable('servicos')) {
            Schema::rename('barber_services', 'servicos');
        }

        if (Schema::hasTable('barber_products') && ! Schema::hasTable('produtos')) {
            Schema::rename('barber_products', 'produtos');
        }

        if (Schema::hasTable('barber_appointments') && ! Schema::hasTable('agendamentos')) {
            Schema::rename('barber_appointments', 'agendamentos');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('agendamentos') && ! Schema::hasTable('barber_appointments')) {
            Schema::rename('agendamentos', 'barber_appointments');
        }

        if (Schema::hasTable('produtos') && ! Schema::hasTable('barber_products')) {
            Schema::rename('produtos', 'barber_products');
        }

        if (Schema::hasTable('servicos') && ! Schema::hasTable('barber_services')) {
            Schema::rename('servicos', 'barber_services');
        }

        if (Schema::hasTable('funcionarios') && ! Schema::hasTable('barber_employees')) {
            Schema::rename('funcionarios', 'barber_employees');
        }

        if (Schema::hasTable('clientes') && ! Schema::hasTable('barber_clients')) {
            Schema::rename('clientes', 'barber_clients');
        }
    }
};
