<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE PROCEDURE BV_CMC_1()
        BEGIN
            SELECT  bv.*,cmc.TenChuyenMucCon FROM baiviets bv 
            JOIN chuyenmuccons as cmc on cmc.id = bv.Id_ChuyenMucCon 
            WHERE Id_TinhTrang=1 AND bv.BiXoa = 0 and bv.NgayDuyet = (select MAX(bv1.NgayDuyet) 
                                                    from baiviets bv1 
                                                    WHERE bv1.Id_ChuyenMucCon=bv.Id_ChuyenMucCon
                                                        and bv1.Id_TinhTrang=1 AND bv1.BiXoa = 0)    
            ORDER BY bv.NgayDuyet DESC																						 
            LIMIT 9;
        END
        ');
        //tin noi bat nhat trong tuan
        DB::unprepared('
        CREATE PROCEDURE BV_NBTT()
        BEGIN
           SELECT * FROM baiviets WHERE NgayDuyet >= DATE_ADD(NOW(),INTERVAL -7 DAY) and Id_TinhTrang = 1 AND BiXoa = 0 ORDER BY LuotXem DESC  LIMIT 0,5;
        END
        ');
      //  tinh moi nhat trong ngay
        DB::unprepared('
        CREATE PROCEDURE BV_MMN()
        BEGIN
          SELECT * FROM baiviets WHERE NgayDuyet >= DATE_ADD(NOW(),INTERVAL -1 DAY) and Id_TinhTrang=1 AND BiXoa = 0;
        END
        ');
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS BV_CMC_1');
        DB::unprepared('DROP PROCEDURE IF EXISTS BV_NBTT');
        DB::unprepared('DROP PROCEDURE IF EXISTS BV_MMN');
    }
}
