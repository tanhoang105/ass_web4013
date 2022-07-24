<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->id();
            $table->string('ma_kh');
            $table->string('ten_kh');
            $table->string('anh_kh');
            $table->string('email_kh');
            $table->string('sdt_kh');
            $table->string('dia_chi_kh');
            $table->string('mo_ta_kh')->nullable();
            $table->tinyInteger('trash_kh')->default(0);
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
        Schema::dropIfExists('khach_hang');
    }
};
