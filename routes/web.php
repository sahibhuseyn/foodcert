<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ================================= CLIENT ===============================================================
Route::group(['middleware' => ['language', 'web']], function () {

    // Page Routes
    Route::get('/', 'Client\MainController@index')->name('index');
    Route::get('/contacts/map', 'Client\MainController@map')->name('map');
    Route::get('/contacts/appeal', 'Client\MainController@appeal')->name('appeal');
    Route::get('/contacts/address', 'Client\MainController@address')->name('address');
    Route::post('/contacts', 'Client\ContactController@postContacts');
    Route::get('/about', 'Client\MainController@about')->name('about');
    Route::get('/service', 'Client\MainController@service')->name('service');


    Route::group(['prefix' => 'news'], function (){
        Route::get('/', 'Client\NewsController@postList')->name('news');
        Route::get('/{slug}', 'Client\NewsController@postSingle')->name('post_single');
    });


    Route::group(['prefix' => 'language_change'], function (){
        Route::get('/{code}', 'Client\LanguageController@changeLanguage')->name('change_language');
    });
});

// ================================= END CLIENT ==============================================================

// ================================= ADMIN ===============================================================
Route::group(['middleware' => ['web', 'auth', 'sharedData'], 'prefix' => 'dashboard'], function () {
    Route::get('/', 'Admin\MainController@index')->name('admin_index');

    Route::group(['prefix' => 'languages'], function () {
        Route::get('/', 'Admin\LanguageController@index')->name('admin_languages');
        Route::post('/add', 'Admin\LanguageController@add')->name('admin_languages_add');
        Route::post('/update', 'Admin\LanguageController@update')->name('admin_languages_update');
        Route::get('/delete/{language}', 'admin\LanguageController@delete')->name('admin_languages_delete');
    });

    Route::group(['prefix' => 'translations'], function () {
        Route::get('/{file_name}', 'Admin\TranslationController@listKeys')->name('admin_translations');
        Route::post('/{file_name}/{key}/add', 'Admin\TranslationController@add')->name('admin_translations_add');
        Route::post('/{file_name}/{key}/update', 'Admin\TranslationController@update')->name('admin_translations_update');
    });


    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', 'Admin\SliderController@listSlides')->name('admin_slider');
        Route::post('/add', 'Admin\SliderController@add')->name('admin_slider_add');
        Route::post('/{slider}/update', 'Admin\SliderController@update')->name('admin_slider_update');
        Route::post('/{slider}/delete', 'Admin\SliderController@delete')->name('admin_slider_delete');
    });
    Route::group(['prefix' => 'partner'], function () {
        Route::get('/', 'Admin\PartnerController@listSlides')->name('admin_partner');
        Route::post('/add', 'Admin\PartnerController@add')->name('admin_partner_add');
        Route::post('/{partner}/update', 'Admin\PartnerController@update')->name('admin_partner_update');
        Route::post('/{partner}/delete', 'Admin\PartnerController@delete')->name('admin_partner_delete');
    });
    Route::group(['prefix' => 'work'], function () {
        Route::get('/', 'Admin\WorkController@listSlides')->name('admin_work');
        Route::post('/add', 'Admin\WorkController@add')->name('admin_work_add');
        Route::post('/{work}/update', 'Admin\WorkController@update')->name('admin_work_update');
        Route::post('/{work}/delete', 'Admin\WorkController@delete')->name('admin_work_delete');
    });

    Route::group(['prefix' => 'testimonials'], function () {
        Route::get('/{language_code}', 'Admin\TestimonialController@show')->name('admin_testimonials');
        Route::post('/{language_id}/add', 'Admin\TestimonialController@add')->name('admin_testimonials_add');
        Route::post('/{testimonial}/update', 'Admin\TestimonialController@update')->name('admin_testimonials_update');
        Route::post('/{testimonial}/delete', 'Admin\TestimonialController@delete')->name('admin_testimonials_delete');
    });

    Route::group(['prefix' => 'services'], function () {
        Route::get('/{language_code}', 'Admin\ServiceController@show')->name('admin_services');
        Route::post('/{language_id}/add', 'Admin\ServiceController@add')->name('admin_services_add');
        Route::post('/{service}/update', 'Admin\ServiceController@update')->name('admin_services_update');
        Route::post('/{service}/delete', 'Admin\ServiceController@delete')->name('admin_services_delete');
    });

    Route::group(['prefix' => 'posts'], function () {
        Route::get('/{language_code}', 'Admin\NewsController@show')->name('admin_posts');
        Route::post('/{language_id}/add', 'Admin\NewsController@add')->name('admin_posts_add');
        Route::get('/{post}/edit', 'Admin\NewsController@edit')->name('admin_posts_edit');
        Route::post('/{post}/update', 'Admin\NewsController@update')->name('admin_posts_update');
        Route::post('/{post}/delete', 'Admin\NewsController@delete')->name('admin_posts_delete');
    });



});
// ================================= END ADMIN ==============================================================

Auth::routes();
