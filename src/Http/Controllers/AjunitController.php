<?php
/**
 * Created by PhpStorm.
 * User: Asher
 * Date: 2019-10-20
 * Time: 22:59
 */

namespace Asher\AjunitLaravel\Http\Controllers;

use Illuminate\Routing\Controller;

class AjunitController extends Controller
{
    public function index(){

        return view('ajunit::index');
    }

    // 接受测试请求
    public function store(Request $request){
        $namespace = $request->input('namespace');
        $className = $request->input('className');
        $action = $request->input('action');
        $param = $request->input('param');
        $class = ($className == '') ? $namespace : $namespace.'\\'.$className;
        $class = str_replace('/','\\',$class);
        $object = new $class(); // 类创建
        $param = ($param == '') ? [] : explode('|',$param);
        $data = call_user_func_array([$object,$action],$param); // 调用类
        return (is_array($data)) ? json_encode($data) : var_dump($data);
    }
}