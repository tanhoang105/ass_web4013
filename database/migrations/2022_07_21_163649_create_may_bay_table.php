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
        Schema::create('may_bay', function (Blueprint $table) {
            $table->id();
            $table->string('so_hieu_mb');
            $table->integer('ma_loai_mb_id');  // máy bay này thuộc hãng nào
            $table->string('anh_mb')->nullable();
            $table->string('mo_ta_mb')->nullable();
            $table->tinyInteger('trash_mb')->default(0);
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
        Schema::dropIfExists('may_bay');
    }
};
