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
        Schema::create('loai_mb', function (Blueprint $table) {
            $table->id();
            $table->string('ma_loai_mb');
            $table->string('ten_loai_mb');
            $table->string('anh_loai_mb')->nullable();
            $table->string('mo_ta_mb')->nullable();
            $table->tinyInteger('trash_loai_mb')->default(0);
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
        Schema::dropIfExists('loai_mb');
    }
};
