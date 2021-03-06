<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartThreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_threes', function (Blueprint $table) {
            $table->id();
            $table->string('url_audio');
            $table->string('url_image')->nullable();
            $table->foreignId('part_id')->constrained();
            $table->text('paragraph');
            $table->text('translate')->nullable();
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
        Schema::dropIfExists('part_threes');
    }
}
