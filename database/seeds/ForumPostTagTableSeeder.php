<?php

use Illuminate\Database\Seeder;
use App\ForumPost;
use App\Tag;

class ForumPostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # First, create an array of all the books we want to associate tags with
      # The *key* will be the book title, and the *value* will be an array of tags.
      # Note: purposefully omitting the Harry Potter books to demonstrate untagged books
      $posts =[
          '1' => ['OOP', 'algorithm'],
          '2' => ['hash table', 'algorithm'],
          '3' => ['iOS'],
          '4' => ['regex']
      ];

      # Now loop through the above array, creating a new pivot for each book to tag
      foreach ($posts as $id => $tags) {

          # First get the book
          $post = ForumPost::where('id', 'like', $id)->first();

          # Now loop through each tag for this book, adding the pivot
          foreach ($tags as $tagName) {
              $tag = Tag::where('name', 'LIKE', $tagName)->first();

              # Connect this tag to this book
              $post->tags()->save($tag);
          }
      }
    }
}
