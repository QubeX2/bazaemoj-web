<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBzPostTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bz_post_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('postid')->index();
            $table->unsignedInteger('tagid')->index();
            $table->unsignedTinyInteger('valuation')->index();
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
        Schema::dropIfExists('bz_post_tags');
    }
}
