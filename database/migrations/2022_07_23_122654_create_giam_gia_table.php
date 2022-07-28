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
        Schema::create('giam_gia', function (Blueprint $table) {
            $table->id();
            $table->string('ma_giam_gia');
            $table->string('menh_gia');
            $table->integer('chuyen_bay_id');
            $table->date('ngay_het_han');
            $table->tinyInteger('trash_giam_gia')->default(0);
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
        Schema::dropIfExists('giam_gia');
    }
};
