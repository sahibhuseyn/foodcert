<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getPosts ($language_code){
        $language_id = Language::getLanguageByCode($language_code)->id;

        return News::where('language_id', $language_id)->paginate(9);
    }

    public static function getPostsByLanguageCode($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return News::where('language_id', $language->id)->get();
    }

    public static function getPostsDesc($language_code){

        $language_id = Language::getLanguageByCode($language_code)->id;
        $posts = News::where('language_id', $language_id)->orderBy('created_at','desc')->limit(3)->get();

        return $posts;
    }

    public static function getPostBySlug ($slug) {
        return News::where('slug', $slug)->first();
    }
}
