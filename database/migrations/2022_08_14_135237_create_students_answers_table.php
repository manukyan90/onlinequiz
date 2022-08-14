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
        Schema::create('students_answers', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')
                ->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('answer_id');
            $table->foreign('answer_id')->references('id')
                ->on('answers')->onDelete('cascade');
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
        Schema::dropIfExists('students_answers');
    }
};
