<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getUser(Request $router)
    {
        $id = $router->input('id');
        error_log($router);
        $user = User::find($id);
//        $name = $router->input('s');//获取前端传的值
        return response()->json($user);
    }
}
