<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//创建节点 两种写法 一种官方的,另一个demo
$api = app('api.router');
//$api= app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('user', function(){
        return \App\User::all();
    });
    $api->get('post', function(){
       return \App\Post::all();
    });

    //控制器下
    $api->get('responding ', 'App\Http\Controllers\Api\V1\UserController@responding');
    $api->get('respondingWithAnArray/{id}', 'App\Http\Controllers\Api\V1\UserController@respondingWithAnArray');
    $api->get('respondingWithASingleItem/{id}', 'App\Http\Controllers\Api\V1\UserController@respondingWithASingleItem');

});


//以下用postman测试或更改.env配置文件下的 API_VERSION = v1 改为 v2
$api->version('v2', function($api){
    $api->get('withPost', function(){
        return \App\User::with('posts')->get();
    });
    //报异常
    $api->get('throwException', function(){
        throw new \Symfony\Component\HttpKernel\Exception\HttpException(500,'Oops!');
    });
});




Route::get('/', function (\Illuminate\Http\Request $request)
{
    return view('welcome');
});



