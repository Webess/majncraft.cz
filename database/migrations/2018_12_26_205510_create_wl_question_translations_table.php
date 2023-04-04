<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWlQuestionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wl_question_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wl_question_id')->unsigned();
            $table->text('text');
            $table->string('locale')->index();

            $table->unique(['wl_question_id', 'locale']);
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
        Schema::dropIfExists('wl_question_translations');
    }
}
