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
        Schema::create('hoso_diems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hoc_sinh')->constrained('hoc_sinh');
            $table->foreignId('id_mon')->constrained('mon');
            $table->float('diem');
            $table->timestamp('thoi_gian_cap_nhap')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoso_diems');
    }
};
