<?php
/**
 * Created by PhpStorm.
 * User: Asher
 * Date: 2019-10-20
 * Time: 23:39
 */

namespace Asher\AjunitLaravel\Http\Controllers;

use Illuminate\Routing\Controller;

// 测试单元组件类
class TestController extends Controller
{
    public function index(){

        return 'ajunit test controller';
    }

}