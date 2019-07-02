<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaikhoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TenDangNhap',1000);
            $table->string('MatKhau',1000);
            $table->bigInteger('Id_Loai')->nullable();
            $table->string('HoTen',1000);
            $table->datetime('NgaySinh');
            $table->boolean('GioiTinh');
            $table->string('Email',1000)->nullable();
            $table->string('DiaChi',1000)->nullable();
            $table->bigInteger('Id_ChuyenMuc')->nullable();
            $table->datetime('NgayMua')->nullable();
            $table->datetime('NgayhetHang')->nullable();
            $table->boolean('PremiumDG');
            $table->string('ButDanh',1000)->nullable();
            $table->string('AnhDaiDien',5000)->nullable();
            $table->boolean('BiXoa')->default(0);
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
        Schema::dropIfExists('taikhoans');
    }
}
