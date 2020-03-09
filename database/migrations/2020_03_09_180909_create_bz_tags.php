<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use App\BzTag;

class CreateBzTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bz_tags', function (Blueprint $table) {
            $table->id();
            $table->integer('userid')->index();
            $table->string('name');
            $table->integer('type')->index();
            $table->integer('sign')->index();
            $table->char('color', 7); // #RRGGBB
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
        Schema::dropIfExists('bz_tags');
    }
}
