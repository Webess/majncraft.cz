<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWlAttemptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wl_attempts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 255);
            $table->string('uuid', 225)->nullable();
            $table->bigInteger('attempt_sum')->default(0);
            $table->boolean('is_whitelisted')->default(false);
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
        Schema::dropIfExists('wl_attempts');
    }
}
