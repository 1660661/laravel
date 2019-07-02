<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuyenmucconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyenmuccons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Id_ChuyenMuc');
            $table->string('TenChuyenMucCon');
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
        Schema::dropIfExists('chuyenmuccons');
    }
}
