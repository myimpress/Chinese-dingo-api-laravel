<?php

namespace App\Http\Controllers\Api\V1;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function responding()
    {
        return User::all();
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * Responding With An Array
     */
    public function respondingWithAnArray($id)
    {
        $user = User::findOrFail($id);


        return $this->response->array($user->toArray());

        /*
         * 测试数据
         * return $this->response->$user;
         * return $this->response->array($user);
         */

    }

    public function respondingWithASingleItem($id)
    {
        $user = User::findOrFail($id);
        return $this->response->item($user, new UserTransformer());

    }


}
