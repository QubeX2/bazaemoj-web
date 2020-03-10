<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBzPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bz_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('userid')->index();
            $table->text('post');
            $table->string('behaviour_problems', 1024);
            $table->string('helpful_behaviour', 1024);
            $table->string('short_term', 1024);
            $table->string('long_term', 1024);
            $table->unsignedInteger('exercise_minutes');
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
        Schema::dropIfExists('bz_posts');
    }
}
