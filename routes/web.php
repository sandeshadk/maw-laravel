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
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {


    Route::get('setting', 'SettingController@index')->name('setting.index');
    Route::put('setting/update', 'SettingController@update')->name('setting.update');

     Route::group(['as' => 'home.', 'prefix' => 'home'], function () {
        Route::get('', 'HomeController@index')->name('home');
        Route::get('create', 'HomeController@create')->name('create');
        Route::post('', 'HomeController@store')->name('store');
        Route::get('{summaries}/edit', 'HomeController@edit')->name('edit');
        Route::put('{summaries}', 'HomeController@update')->name('update');
        Route::delete('{summaries}', 'HomeController@delete')->name('delete');
    });

     /*
        |--------------------------------------------------------------------------
        | Page CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'page.', 'prefix' => 'page'], function () {
        Route::get('', 'PageController@index')->name('index');
        Route::get('create', 'PageController@create')->name('create');
        Route::post('', 'PageController@store')->name('store');
        Route::get('{page}', 'PageController@show')->name('show');
        Route::get('{page}/edit', 'PageController@edit')->name('edit');
        Route::put('{page}', 'PageController@update')->name('update');
        Route::delete('{page}', 'PageController@destroy')->name('destroy');
    });


     /*
        |--------------------------------------------------------------------------
        | Post CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'post.', 'prefix' => 'post'], function () {
        Route::get('', 'PostController@index')->name('index');
        Route::get('create', 'PostController@create')->name('create');
        Route::post('', 'PostController@store')->name('store');
        Route::get('{post}', 'PostController@show')->name('show');
        Route::get('{post}/edit', 'PostController@edit')->name('edit');
        Route::put('{post}', 'PostController@update')->name('update');
        Route::delete('{post}', 'PostController@destroy')->name('destroy');
    });
         /*
        |--------------------------------------------------------------------------
        | Menu CRUD Routes
        |--------------------------------------------------------------------------
        */

         Route::group(['as' => 'menu.', 'prefix' => 'menu'], function () {
        Route::get('', 'MenuController@index')->name('index');
        Route::get('/indexnp', 'MenuController@indexnp')->name('indexnp');
        Route::post('', 'MenuController@store')->name('store');
        Route::put('', 'MenuController@update')->name('update');
        Route::delete('{menu}', 'MenuController@destroy')->name('destroy');

        Route::group(['as' => 'subMenu.'], function () {
            Route::post('{menu}/subMenu', 'MenuController@storeSubMenu')->name('store');
            Route::delete('{menu}/subMenu/{subMenu}', 'MenuController@destroySubMenu')->name('destroy');
            Route::get('{menu}/subMenuModal', 'MenuController@subMenuModal')->name('component.modal');

            Route::group(['as' => 'childsubMenu.'], function () {
                Route::post('{subMenu}/subMenu/childsubMenu', 'MenuController@storeChildSubMenu')->name('store');
                Route::delete('{menu}/subMenu/{subMenu}/childsubMenu/{childSubMenu}', 'MenuController@destroyChildSubMenu')->name('destroy');
                Route::get('{subMenu}/subMenu/childsubMenuModal', 'MenuController@childsubMenuModal')->name('component.modal');
            });
        });
    });
        /*
        |--------------------------------------------------------------------------
        | Slider CRUD Routes
        |--------------------------------------------------------------------------
        */
        Route::group(['as'=>'slider.', 'prefix'=>'slider' ], function(){
        Route::get('','SliderController@index')->name('index');
        Route::get('create','SliderController@create')->name('create');
        Route::post('','SliderController@store')->name('store');
        Route::put('{slider}','SliderController@update')->name('update');
        Route::get('{slider}/edit','SliderController@edit')->name('edit');
        Route::delete('{slider}','SliderController@delete')->name('destroy');
        });


        //team
        Route::group(['as'=>'team.', 'prefix'=>'team' ], function(){
        Route::get('','TeamController@index')->name('index');
        Route::get('create','TeamController@create')->name('create');
        Route::post('','TeamController@store')->name('store');
        Route::put('{team}','TeamController@update')->name('update');
        Route::get('{team}/edit','TeamController@edit')->name('edit');
        Route::delete('{team}','TeamController@delete')->name('destroy');
        });

        //traininglocation
        Route::group(['as'=>'traininglocation.', 'prefix'=>'traininglocation' ], function(){
        Route::get('','TraininglocationController@index')->name('index');
        Route::get('create','TraininglocationController@create')->name('create');
        Route::post('','TraininglocationController@store')->name('store');
        Route::put('{location}','TraininglocationController@update')->name('update');
        Route::get('{location}/edit','TraininglocationController@edit')->name('edit');
        Route::delete('{location}','TraininglocationController@delete')->name('delete');
        });

         /*
        |--------------------------------------------------------------------------
        |News CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'news.', 'prefix' => 'news'], function () {
        Route::get('', 'NewsController@index')->name('index');
        Route::get('create', 'NewsController@create')->name('create');
        Route::post('', 'NewsController@store')->name('store');
        Route::get('{news}/edit', 'NewsController@edit')->name('edit');
        Route::put('{news}', 'NewsController@update')->name('update');
        Route::delete('{news}', 'NewsController@destroy')->name('destroy');
    });

        Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');





    /*
  |--------------------------------------------------------------------------
  | BrandController CRUD Routes
  |--------------------------------------------------------------------------
  */
  Route::group([ 'as' => 'feature.', 'prefix' => 'feature' ], function () {
      Route::get('', 'BrandController@index')->name('index');
      Route::get('create', 'BrandController@create')->name('create');
      Route::post('', 'BrandController@store')->name('store');
      Route::get('{brand}/edit', 'BrandController@edit')->name('edit');
      Route::put('{brand}', 'BrandController@update')->name('update');
      Route::delete('{brand}', 'BrandController@delete')->name('destroy');
  });

  /*
  |--------------------------------------------------------------------------
  | Product Controller CRUD Routes
  |--------------------------------------------------------------------------
  */


    Route::group([ 'as' => 'service.', 'prefix' => 'service' ], function () {
      Route::get('{brand}', 'ServiceController@index')->name('index');
      Route::post('store/{brand}', 'ServiceController@store')->name('store');
      Route::put('{service}', 'ServiceController@update')->name('update');
      Route::get('create/service/{brand}', 'ServiceController@create')->name('create');
      Route::get('{service}/edit', 'ServiceController@edit')->name('edit');
      Route::delete('{service}', 'ServiceController@destroy')->name('destroy');
  });





        //download file
        Route::group([ 'as' => 'download.', 'prefix' => 'download' ], function ()
        {
            Route::get('', 'DownloadController@index')->name('index');
            Route::get('create', 'DownloadController@create')->name('create');
            Route::post('store', 'DownloadController@store')->name('store');
            Route::put('{download}', 'DownloadController@update')->name('update');
            Route::get('{download}/edit', 'DownloadController@edit')->name('edit');
            Route::delete('{download}', 'DownloadController@destroy')->name('destroy');

        });

            /*
        |--------------------------------------------------------------------------
        | Photo CRUD Routes
        |--------------------------------------------------------------------------
        */
         Route::group([ 'as' => 'photo.', 'prefix' => 'photo' ], function ()
        {
            Route::get('', 'PhotoController@index')->name('index');
            Route::get('create', 'PhotoController@create')->name('create');
            Route::post('store', 'PhotoController@store')->name('store');
            Route::put('{photo}', 'PhotoController@update')->name('update');
            Route::get('{photo}/edit', 'PhotoController@edit')->name('edit');
            Route::delete('{photo}', 'PhotoController@delete')->name('destroy');

        });
              /*
        |--------------------------------------------------------------------------
        | Form CRUD Routes
        |--------------------------------------------------------------------------
        */
         Route::group([ 'as' => 'form.', 'prefix' => 'form' ], function ()
        {
            Route::get('', 'FormController@index')->name('index');
            Route::get('create', 'FormController@create')->name('create');
            Route::post('store', 'FormController@store')->name('store');
            Route::put('{form}', 'FormController@update')->name('update');
            Route::get('{form}/edit', 'FormController@edit')->name('edit');
            Route::delete('{form}', 'FormController@destroy')->name('destroy');

        });




  /*
    |--------------------------------------------------------------------------
    |  Album Controller
    |--------------------------------------------------------------------------
    */
    Route::group([ 'as' => 'album.', 'prefix' => 'album' ], function () {
        Route::get('/', array('as' => 'index','uses' => 'AlbumController@getlist'));
        Route::get('/createalbum', array('as' => 'createalbum','uses' => 'AlbumController@getForm'));
        Route::post('/createalbum', array('as' => 'create_album','uses' => 'AlbumController@postCreate'));
        Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumController@getDelete'));
        Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumController@getAlbum'));
        Route::get('/addimage/{id}', array('as' => 'add_image','uses' => 'ImageController@getForm'));
        Route::post('/addimage', array('as' => 'add_image_to_album','uses' => 'ImageController@postAdd'));
        Route::get('/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImageController@getDelete'));
        Route::post('/moveimage', array('as' => 'move_image', 'uses' => 'ImageController@postMove'));
    });

    });

        /*
        |--------------------------------------------------------------------------
        | Frontend Controller
        |--------------------------------------------------------------------------
        */


Route::get('', 'FrontendController@homepage')->name('homepage');
Route::get('/programs/{slug?}', 'FrontendController@programs')->name('programs');
Route::get('/trainings/{brand?}/{slug?}', 'FrontendController@trainings')->name('trainings');
Route::get('/news/{slug?}', 'FrontendController@news')->name('news');
Route::get('/history', 'FrontendController@history')->name('history');
Route::get('/partner', 'FrontendController@partners')->name('partner');
Route::get('/partnerwithacademy', 'FrontendController@partnerwithacademy')->name('partnerwithacademy');
Route::get('/message', 'FrontendController@messageofgreeting')->name('message');
Route::get('/leadership', 'FrontendController@leadership')->name('leadership');
Route::get('/team', 'FrontendController@team')->name('team');
Route::get('/industrial-advisory', 'FrontendController@industrial')->name('industrial-advisory');
Route::get('/technical-advisory', 'FrontendController@technical')->name('technical-advisory');
Route::get('/overview', 'FrontendController@overview')->name('overview');
Route::get('/hire', 'FrontendController@hiregraduates')->name('hire');
Route::get('/learnerstestimonials', 'FrontendController@learners')->name('learnerstestimonials');
Route::get('/success-story', 'FrontendController@success')->name('success-story');
Route::get('/employerstestimonials', 'FrontendController@employers')->name('employerstestimonials');
Route::get('/location', 'FrontendController@locations')->name('location');
Route::get('/album', array('as' => 'album','uses' => 'FrontendController@album'));
Route::get('/gallery/{id}', array('as' => 'show_album_view','uses' => 'FrontendController@gallery'));
Route::get('/document', 'FrontendController@document')->name('document');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::post('/inquiry', 'FrontendController@inquiry')->name('contact.inquiry');
Route::post('/apply', 'FrontendController@apply')->name('contact.apply');
Route::post('/hire', 'FrontendController@hire')->name('contact.hire');
Route::post('/partner', 'FrontendController@partner')->name('contact.partner');
Route::get('{any}', 'FrontendController@page')->name('page');
