<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getService($language_code){
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Service::where('language_id', $language_id)->limit('6')->get();
    }

    public static function getServiceByLanguageCode($language_code){
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Service::where('language_id', $language_id)->get();
    }
}
