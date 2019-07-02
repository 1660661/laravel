<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaivietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Anh',2000)->nullable();
            $table->string('TieuDe',2000);
            $table->bigInteger('Id_ChuyenMucCon');
            $table->dateTime('NgayDang');
            $table->bigInteger('NguoiDang');
            $table->dateTime('NgayDuyet')->nullable();
            $table->bigInteger('NguoiDuyet')->nullable();
            $table->bigInteger('Id_TinhTrang');
            $table->string('NoiDungChiTiet',10000);
            $table->string('NoiDungTomTat',2000);
            $table->integer('LuotXem')->nullable();
            $table->dateTime('NgayXuatBan')->nullable();
            $table->string('LiDo')->nullable();
            $table->boolean('BiXoa')->default(0);;
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baiviets');
    }
}
