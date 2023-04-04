<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCjdzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cjdzs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cjdz_category_id');
            $table->string('title');
            $table->string('excerpt')->nullable();
            $table->text('content')->nullable();
            $table->string('cover')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('cjdzs');
    }
}
