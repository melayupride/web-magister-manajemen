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
        Schema::create('kunjungans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ip_address', 45);
            $table->text('user_agent');
            $table->text('referrer')->nullable();
            $table->string('page_url', 255);
            $table->dateTime('visit_time');
            $table->enum('device_type', ['mobile', 'desktop', 'tablet', 'bot']);
            $table->string('browser', 50)->nullable();
            $table->string('os', 50)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->timestamps();
            
            $table->index('visit_time'); // Index untuk pencarian berdasarkan waktu
            $table->index('ip_address'); // Index untuk pencarian berdasarkan IP
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungans');
    }
};