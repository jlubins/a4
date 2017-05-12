<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumPostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('forum_post_tag', function (Blueprint $table) {
           $table->increments('id');
           $table->timestamps();

           # `post_id` and `tag_id` will be foreign keys, so they have to be unsigned
           #  Note how the field names here correspond to the tables they will connect...
           # `post_id` will reference the `posts table` and `tag_id` will reference the `tags` table.
           $table->integer('forum_post_id')->unsigned();
           $table->integer('tag_id')->unsigned();

           # Make foreign keys
           $table->foreign('forum_post_id')->references('id')->on('forum_posts');
           $table->foreign('tag_id')->references('id')->on('tags');
      });
    }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop('forum_post_tag');
     }
}
