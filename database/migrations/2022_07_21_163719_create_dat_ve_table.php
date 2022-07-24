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
        Schema::create('dat_ve', function (Blueprint $table) {
            $table->id();
            $table->string('ma_ve');
            $table->integer('ve_id');
            $table->integer('kh_id');
            $table->string('mo_ta_dat_ve');
            $table->tinyInteger('trash_dat_ve')->default(0);

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
        Schema::dropIfExists('dat_ve');
    }
};
