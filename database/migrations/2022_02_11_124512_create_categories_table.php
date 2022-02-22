<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();

        });

        DB::table('categories')->insert([
            ['name' => 'Défense'],
            ['name' => 'Culture'],
            ['name' => 'Sociale'],
            ['name' => 'Météreologie'],
            ['name' => 'Enseignement'],
            ['name' => 'Médecine'],
            ['name' => 'Tourisme'],
            ['name' => 'Richesse'],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
