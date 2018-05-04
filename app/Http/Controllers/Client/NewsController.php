<?php

namespace App\Http\Controllers\Client;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function postList(){
        $language = session('language');
        $posts = News::getPosts($language);

        return view('client.post.posts', compact('posts'));
    }

    public function postSingle($slug){
        $post = News::getPostBySlug($slug);
        $language = session('language');

        $posts = News::getPostsDesc($language);

        if(!$post){
            return back();
        }

        return view('client.post.single', compact('post', 'posts'));
    }

}
