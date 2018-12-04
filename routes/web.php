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

Route::get('/', function () {
    return view('main');
});

Route::get('/fr',function(){
    return view('main_fr');
});
/*
Route::get('/download/{url}', [
    'uses' => 'MainController@downloadVideo',
    'as' => 'downloadVideo'
]);
*/
Route::get('/download-test', function(){
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary"); 
    header("Content-disposition: attachment; filename=\" video.mp4 \""); 
    readfile('http://m-v16.akamaized.net//c0d3d330e193dd40ad792b6f0fd7e007//5c0524c7//video//n//v0102//421ed2443a0348e6b2abd0a9c0b15d4c//?rc=amdmZmtza2x2aDMzOzgzM0ApQHRAb0lFNjozNzM0NDk1MzY1OzNAKXUpQGczdylAZmV6ZXpvZnZwZjY1QHItcWxmY2Bmcl8tLTMvNHNzNW8jbyMxMDYxMS0uLS0wMS0tLi4vaTpiLW8jOmAtbyNiK2IrXmZyOiMwLl4%3D');
});

Route::get('/test', [
    'uses' => 'MainController@test',
    'as' => 'test'
]);


Route::post('/getvideo',[
    'uses' => 'MainController@crawlData',
    'as' => 'crawldata'
]);

Route::post('/download',[
    'uses' => 'MainController@downloadVideo',
    'as' => 'download_video'
]);
