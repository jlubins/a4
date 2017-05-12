<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\ForumCategory;
use App\ForumPost;
use App\User;
use View;
use DB;

class ForumController extends Controller
{
    public function categoryIndex()
    {
        $category = new ForumCategory();
        $categories = $category->get();

    //pass categories to view
    return view('home', compact('categories'));
    }

    public function postIndex($category)
    {
        $categoryids = ForumCategory::where('title', $category)->value('id');
        $posts = ForumPost::where('parent_post', null)->where('id_category', $categoryids)->get();

    //pass posts to view
    return view('category.'.$category, compact('posts'));
    }

    public function postView($postid)
    {
        //retrieve posts and replies from database
    $posts = ForumPost::where('id', $postid)->get();
        $replies = ForumPost::where('parent_post', $postid)->get();

    //get currently logged in user's id
    $userid = \Auth::id();

    //check for matches between logged in user id and posts/replies (NOT WORKING)
    foreach ($posts as $post) {
        $user1 = User::where('id', $post['id_user'])->get()->toArray();
        $match1 = ForumPost::where('id_user', $userid)->get()->toArray();
    }

        foreach ($replies as $reply) {
            $user2 = User::where('id', $reply['id_user'])->get()->toArray();
            $match2 = ForumPost::where('id_user', $userid)->get()->toArray();
            return view('post.{postid}')->with('posts', $posts)->with('replies', $replies)->with('user1', $user1)->with('match1', $match1)->with('user2', $user2)->with('match2', $match2);
        }

    //send all of this info to post view
    return view('post.{postid}')->with('posts', $posts)->with('replies', $replies)->with('user1', $user1)->with('match1', $match1);
    }

    public function generateForm($postid)
    {
        $posts = ForumPost::where('id', $postid)->get()->toArray();
        $postid = $posts[0]['id'];
        return view('post.{postid}.reply')->with('postid', $postid);
    }

    public function postEdit($postid)
    {
        $posts = ForumPost::where('id', $postid)->get()->toArray();
        $postid = $posts[0]['id'];
        return view('post.{postid}.edit')->with('postid', $postid);
    }

    public function postDelete($postid)
    {
        $posts = ForumPost::where('parent_post', $postid)->orWhere('id', $postid)->get();
        foreach ($posts as $post) {
            $post->tags()->detach();
            $post->delete();
        }
        return redirect()->route('home');
    }

    public function postReply($postid, Request $request)
    {
        $this->validate($request, [
          'content' => 'required|max:2000',
        ]);

        $parentpost = ForumPost::where('id', $postid)->get()->toArray();
        $idexists = ForumPost::find($postid);

        if ($idexists) {
            $reply = new ForumPost();

            $reply->id_category = $parentpost[0]['id_category'];
            $reply->id_user = \Auth::id();
            $reply->parent_post = $postid;
            $reply->title = null;
            $reply->content = $request->content;
            $reply->is_poll = 0;
            $reply->ip = \Request::ip();

            $reply->save();
        }

        return redirect()->route('thread', $postid);
    }

    public function submitPostEdit($postid, Request $request)
    {
        $this->validate($request, [
        'content' => 'required|max:2000',
      ]);

        $editedposts = ForumPost::where('id', $postid)->get();
        $idexists = ForumPost::find($postid);

        if ($idexists) {
            foreach ($editedposts as $editedpost) {
                $editedpost->content = $request->content;
                $editedpost->save();
            }
        }
      //supposed to redirect back to the thread the post was made in, but redirects to a page of its own
      return redirect()->route('thread', $postid);
    }
}
