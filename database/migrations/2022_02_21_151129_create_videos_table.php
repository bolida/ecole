<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name')->nullable(false);
            $table->mediumText('url')->nullable(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

        DB::table('videos')->insert([
            ['user_id' => 1, 'name' => 'Mon premier vidéo', 'url' => 'http://video1.mp4'],
            ['user_id' => 2, 'name' => 'Mon deuxième vidéo', 'url' => 'http://video2.mp4'],
            ['user_id' => 1, 'name' => 'Mon troisième vidéo', 'url' => 'http://video3.mp4'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
