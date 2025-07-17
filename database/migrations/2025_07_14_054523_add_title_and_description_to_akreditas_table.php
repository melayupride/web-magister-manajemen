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
        Schema::table('akreditas', function (Blueprint $table) {
            $table->string('body')->nullable()->after('id');
            $table->text('description')->nullable()->after('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('akreditas', function (Blueprint $table) {
            $table->dropColumn(['body', 'description']);
        });
    }
};
