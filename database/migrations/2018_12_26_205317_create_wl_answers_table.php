<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWlAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wl_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wl_question_id')->unsigned();
            $table->tinyInteger('is_correct')->default(0);

            $table->foreign('wl_question_id')->references('id')->on('wl_questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wl_answers');
    }
}
