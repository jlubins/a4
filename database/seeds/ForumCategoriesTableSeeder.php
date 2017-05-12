<?php

use Illuminate\Database\Seeder;
use App\ForumCategory;

class ForumCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      ForumCategory::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'C',
          'description' => 'This is a forum for C-related inquiries',
      ]);

      ForumCategory::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'C++',
          'description' => 'This is a forum for C++-related inquiries',
      ]);

      ForumCategory::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'D',
          'description' => 'This is a forum for D-related inquiries',
      ]);

      ForumCategory::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'Erlang',
          'description' => 'This is a forum for Erlang-related inquiries',
      ]);

      ForumCategory::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'HTML+CSS',
          'description' => 'This is a forum for HTML+CSS-related inquiries',
      ]);

      ForumCategory::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'Java',
          'description' => 'This is a forum for Java-related inquiries',
      ]);

      ForumCategory::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'Javascript',
          'description' => 'This is a forum for Javscript-related inquiries',
      ]);

      ForumCategory::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'PHP',
          'description' => 'This is a forum for PHP-related inquiries',
      ]);

      ForumCategory::insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'ip' => \Request::ip(),
          'title' => 'Python',
          'description' => 'This is a forum for Python-related inquiries',
      ]);
    }
}
