<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('forum_posts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_category');
          $table->integer('id_user');
          $table->integer('parent_post')->nullable();
          $table->string('title', 90)->nullable();
          $table->text('content');
          $table->boolean('is_poll');
          $table->timestamps();
          $table->ipAddress('ip');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forum_posts');
    }
}
