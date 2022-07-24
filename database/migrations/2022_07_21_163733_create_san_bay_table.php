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
        Schema::create('san_bay', function (Blueprint $table) {
            $table->id();
            $table->string('ten_sb');
            $table->string('dia_chi_sb');
            $table->string('anh_sb')->nullable();
            $table->string('mo_ta_sb')->nullable();
            $table->tinyInteger('loai_sb')->default(0);  // sân bay đi (0) or sân bay đến (1)
            $table->tinyInteger('trash_sb')->default(0);
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
        Schema::dropIfExists('san_bay');
    }
};
