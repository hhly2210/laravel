<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            DB::statement("CREATE VIEW view_tongdiem AS
            SELECT hosodiem.IDHocSinh, hocsinh.HoTen, COUNT(hosodiem.IDMon) TongSoMon, AVG(hosodiem.Diem) TongDiem
            FROM hosodiem JOIN hocsinh ON hocsinh.ID = hosodiem.IDHocSinh
            GROUP BY hosodiem.IDHocSinh, hocsinh.HoTen;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS view_tongdiem");
    }
};
