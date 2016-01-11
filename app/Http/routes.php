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

//创建节点 两种写法
$api = app('api.router');
//$api= app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('user', function(){
        return \App\User::all();
    });
    $api->get('post', function(){
       return \App\Post::all();
    });
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




//测试异常.如果需要测试请把dd那行注释掉
Route::get('/', function (\Illuminate\Http\Request $request)
{
    return view('welcome');
});



