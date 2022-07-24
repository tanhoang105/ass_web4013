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
        Schema::create('chuyen_bay', function (Blueprint $table) {
            $table->id();
            $table->string('ma_cb');
            $table->date('ngay_di');
            $table->integer('sb_id');
            $table->date('gio_di');
            $table->date('gio_den');
            $table->integer('mb_id'); // liên quan đến số hiệu máy bay , loại máy bay
            $table->string('mo_ta_cb')->nullable();
            $table->tinyInteger('trash_cb')->default(0);
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
        Schema::dropIfExists('chuyen_bay');
    }
};
