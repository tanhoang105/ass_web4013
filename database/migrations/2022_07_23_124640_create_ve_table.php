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
        Schema::create('ve', function (Blueprint $table) {
            $table->id();
            $table->string('ma_ve');
            $table->string('cb_id');
            $table->string('gia_ve');
            $table->string('so_ghe');
            $table->string('loai_ve'); // bình thường , hạng sang
            $table->string('khu_hoi')->default(0); // 0 là 1 chiều
            $table->string('giam_gia');
            $table->string('mo_ta_ve')->nullable();
            $table->tinyInteger('trash_ve')->default(0);
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
        Schema::dropIfExists('ve');
    }
};
