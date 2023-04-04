<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWlAnswerTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wl_answer_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wl_answer_id')->unsigned();
            $table->text('text');
            $table->string('locale')->index();

            $table->unique(['wl_answer_id', 'locale']);
            $table->foreign('wl_answer_id')->references('id')->on('wl_answers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wl_answer_translations');
    }
}
