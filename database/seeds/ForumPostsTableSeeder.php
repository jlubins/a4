<?php

use Illuminate\Database\Seeder;
use App\ForumPost;

class ForumPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '0',
          'id_category' => '1',
          'id_user' => '1',
      ]);

      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '1',
          'id_category' => '1',
          'id_user' => '2',
      ]);

      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '0',
          'id_category' => '2',
          'id_user' => '1',
      ]);

      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '1',
          'id_category' => '2',
          'id_user' => '2',
      ]);

      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '0',
          'id_category' => '3',
          'id_user' => '1',
      ]);

      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '1',
          'id_category' => '3',
          'id_user' => '2',
      ]);


      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '0',
          'id_category' => '4',
          'id_user' => '1',
      ]);

      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '1',
          'id_category' => '4',
          'id_user' => '2',
      ]);


      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '0',
          'id_category' => '5',
          'id_user' => '1',
      ]);

      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '1',
          'id_category' => '5',
          'id_user' => '2',
      ]);


      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '0',
          'id_category' => '6',
          'id_user' => '1',
      ]);

      ForumPost::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'How do I do this?',
          'content' => 'What is it',
          'is_poll' => '1',
          'id_category' => '6',
          'id_user' => '2',
      ]);

    }
}
