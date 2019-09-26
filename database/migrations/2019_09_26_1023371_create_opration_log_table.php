<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOprationLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opration_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('path');
            $table->string('method');
            $table->string('ip');
            $table->string('input');

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
        Schema::dropIfExists('opration_log');
    }
}
