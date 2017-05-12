<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tags = ['algorithm', 'android', 'API', 'database', 'framework', 'functional programming', 'hash table', 'iOS' ,'interview', 'machine learning', 'mobile app', 'OOP', 'regex', 'server', 'sql', 'tree', 'webdev'];

      foreach($tags as $tagName) {
          $tag = new Tag();
          $tag->name = $tagName;
          $tag->save();
      }
    }
}
