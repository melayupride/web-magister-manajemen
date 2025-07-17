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
        Schema::table('akreditasis', function (Blueprint $table) {
            $table->enum('status', ['Masih Berlaku', 'Sudah Kedaluwarsa'])->default('Masih Berlaku');
            $table->string('peringkat')->nullable();
            $table->string('lembaga_akreditasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('akreditasis', function (Blueprint $table) {
            $table->dropColumn(['status', 'peringkat', 'lembaga_akreditasi']);
        });
    }
};