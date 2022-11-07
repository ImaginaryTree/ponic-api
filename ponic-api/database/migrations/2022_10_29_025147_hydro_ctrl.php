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
        Schema::create('hydro_ctrl', function (Blueprint $table) {
            $table->id()->increments();
            $table->integer('pompa');
            $table->float('min_ph');
            $table->float('max_ph');
            $table->integer('min_ppm');
            $table->integer('max_ppm');
            $table->time('time_off',$precision=0);
            $table->time('time_on',$precision=0);
            $table->date('planting_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
