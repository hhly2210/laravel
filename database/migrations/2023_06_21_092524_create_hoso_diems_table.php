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
        Schema::create('hosodiem', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IDHocSinh')->references('id')->on('hocsinh')->cascadeOnDelete();
            $table->foreignId('IDMon')->references('id')->on('mon')->cascadeOnDelete();
            $table->float('Diem')->nullable();
            $table->timestamp('ThoiGianCapNhap')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hosodiem');
    }
};
