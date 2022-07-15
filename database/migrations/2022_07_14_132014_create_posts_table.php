<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name')
                ->comment('Навазние поста');
            $table->text('text')
                ->comment('Текст поста');
            $table->string('image')
                ->comment('Картинка поста');
            $table->integer('views')
                ->comment('Кол-во просмотров поста');
            $table->integer('slug')
                ->comment('Красивая ссылка на пост');
            $table->integer('user_id')
                ->comment('id пользователя, который написал пост');
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
        Schema::dropIfExists('posts');
    }
}
