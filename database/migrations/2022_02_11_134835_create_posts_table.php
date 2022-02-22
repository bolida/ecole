<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('categorie_id');
            $table->string('name')->nullable(false);
            $table->mediumText('content')->nullable(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('categorie_id')->references('id')->on('categories');

        });

        DB::table('posts')->insert([
            ['user_id' => 1, 'categorie_id' => 8, 'name' => 'mon super article 1', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus turpis ac tellus facilisis elementum. Quisque vehicula accumsan congue. Nunc auctor nulla vitae justo maximus, ut tincidunt tellus euismod. Morbi nec elit orci. Donec sagittis iaculis leo eu interdum. Maecenas feugiat eros vitae mattis suscipit. Duis venenatis dolor ut sem finibus, vel condimentum ligula dapibus. Sed semper nec risus vel egestas. Donec non mauris felis. Sed faucibus maximus tincidunt. Donec a nisl at sem ullamcorper consequat id id libero. Nullam at dolor eu sapien laoreet rutrum. Donec fermentum magna sed erat gravida, ac luctus augue rutrum.'],
            ['user_id' => 5, 'categorie_id' => 6, 'name' => 'mon super article 2', 'content' => 'Donec condimentum molestie ligula, sit amet pharetra orci eleifend nec. Fusce fringilla urna ex, ac accumsan sapien luctus sed. Vivamus id lobortis tellus. Integer egestas vehicula felis, dignissim aliquet erat mattis ut. Nullam in euismod ipsum, nec vestibulum felis. Donec eros purus, tempus sed tincidunt eu, posuere sit amet metus. Proin sodales nibh nec tortor tempus pharetra. Etiam fringilla blandit est, eget egestas neque faucibus in. Nullam pulvinar nec leo quis auctor. Maecenas facilisis arcu leo, nec semper nisi laoreet vel. Aliquam erat volutpat. Morbi eu turpis lacus. Praesent placerat condimentum orci sed ullamcorper.'],
            ['user_id' => 3, 'categorie_id' => 4, 'name' => 'mon super article 3', 'content' => 'Nunc ultricies eros sed nunc feugiat tristique. Maecenas semper placerat leo bibendum elementum. Nulla euismod erat neque. Maecenas aliquet nisi eu ex bibendum efficitur. Aliquam sit amet egestas nisi. Cras porttitor eget tortor non iaculis. Etiam posuere ipsum augue, ac blandit ex dictum nec.'],
            ['user_id' => 2, 'categorie_id' => 2, 'name' => 'mon super article 4', 'content' => 'Donec condimentum molestie ligula, sit amet pharetra orci eleifend nec. Fusce fringilla urna ex, ac accumsan sapien luctus sed. Vivamus id lobortis tellus. Integer egestas vehicula felis, dignissim aliquet erat mattis ut. Nullam in euismod ipsum, nec vestibulum felis. Donec eros purus, tempus sed tincidunt eu, posuere sit amet metus. Proin sodales nibh nec tortor tempus pharetra. Etiam fringilla blandit est, eget egestas neque faucibus in. Nullam pulvinar nec leo quis auctor. Maecenas facilisis arcu leo, nec semper nisi laoreet vel. Aliquam erat volutpat. Morbi eu turpis lacus. Praesent placerat condimentum orci sed ullamcorper.'],
            ['user_id' => 4, 'categorie_id' => 1, 'name' => 'mon super article 5', 'content' => 'Aenean fringilla mi eget malesuada gravida. Donec vitae est blandit, hendrerit turpis eu, dignissim libero. Aliquam vulputate urna in lectus tempus, eget dapibus arcu finibus. Donec faucibus leo consectetur nibh sagittis, sed mollis lorem fermentum. Cras porttitor elit libero. Pellentesque nibh dui, pellentesque nec ipsum nec, venenatis imperdiet ex. Maecenas finibus dui enim, finibus varius lectus egestas vel.'],
            ['user_id' => 4, 'categorie_id' => 3, 'name' => 'mon super article 6', 'content' => 'Aenean fringilla mi eget malesuada gravida. Donec vitae est blandit, hendrerit turpis eu, dignissim libero. Aliquam vulputate urna in lectus tempus, eget dapibus arcu finibus. Donec faucibus leo consectetur nibh sagittis, sed mollis lorem fermentum. Cras porttitor elit libero. Pellentesque nibh dui, pellentesque nec ipsum nec, venenatis imperdiet ex. Maecenas finibus dui enim, finibus varius lectus egestas vel.'],
            ['user_id' => 3, 'categorie_id' => 5, 'name' => 'mon super article 7', 'content' => 'Donec ex nibh, pellentesque quis tempor sed, molestie in diam. Praesent diam dolor, sagittis id risus non, euismod sagittis dui. Cras et eros vehicula, volutpat felis non, ullamcorper ligula. Ut elementum sem nec nisl suscipit, id tristique ante tempor. Aenean id eros ex. Ut sodales tortor vitae quam fermentum cursus. Duis quis ultrices tortor. Quisque feugiat massa ac metus maximus vulputate.'],
            ['user_id' => 2, 'categorie_id' => 8, 'name' => 'mon super article 8', 'content' => 'Donec ex nibh, pellentesque quis tempor sed, molestie in diam. Praesent diam dolor, sagittis id risus non, euismod sagittis dui. Cras et eros vehicula, volutpat felis non, ullamcorper ligula. Ut elementum sem nec nisl suscipit, id tristique ante tempor. Aenean id eros ex. Ut sodales tortor vitae quam fermentum cursus. Duis quis ultrices tortor. Quisque feugiat massa ac metus maximus vulputate.'],
            ['user_id' => 1, 'categorie_id' => 1, 'name' => 'mon super article 9', 'content' => 'Nunc ultricies eros sed nunc feugiat tristique. Maecenas semper placerat leo bibendum elementum. Nulla euismod erat neque. Maecenas aliquet nisi eu ex bibendum efficitur. Aliquam sit amet egestas nisi. Cras porttitor eget tortor non iaculis. Etiam posuere ipsum augue, ac blandit ex dictum nec.'],
            ['user_id' => 5, 'categorie_id' => 2, 'name' => 'mon super article 10', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus turpis ac tellus facilisis elementum. Quisque vehicula accumsan congue. Nunc auctor nulla vitae justo maximus, ut tincidunt tellus euismod. Morbi nec elit orci. Donec sagittis iaculis leo eu interdum. Maecenas feugiat eros vitae mattis suscipit. Duis venenatis dolor ut sem finibus, vel condimentum ligula dapibus. Sed semper nec risus vel egestas. Donec non mauris felis. Sed faucibus maximus tincidunt. Donec a nisl at sem ullamcorper consequat id id libero. Nullam at dolor eu sapien laoreet rutrum. Donec fermentum magna sed erat gravida, ac luctus augue rutrum.'],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
