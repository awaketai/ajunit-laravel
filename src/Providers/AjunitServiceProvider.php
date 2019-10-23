<?php
/**
 * Created by PhpStorm.
 * User: Asher
 * Date: 2019-10-20
 * Time: 23:43
 */

namespace Asher\AjunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;

// 单元测试服务提供者
class AjunitServiceProvider extends ServiceProvider
{
    // 注册运行组件
    public function register(){
        echo 'this is ajunit laravel test';
    }

    // 运行服务组件
    public function boot(){

    }

}