<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

        });

        DB::table('users')->insert([
            ['name' => 'RAZAFIMANDIMBY', 'email' => 'razafimandimbyhery@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'password' => '1234566'],
            ['name' => 'RAMAMONJISOA', 'email' => 'ramamonjisoa@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'password' => '4556321'],
            ['name' => 'RATSIMBASON', 'email' => 'ratsimbason@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'password' => '12654212'],
            ['name' => 'ZAFIHARISON', 'email' => 'zafiharison@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'password' => '36521452'],
            ['name' => 'MATAVIMANANA', 'email' => 'matavimanana@gmail.com', 'email_verified_at' => date('Y-m-d H:i:s'), 'password' => '87458697']

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
