<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $list  = Db::name('campusbus_user')->select();
        return $this->fetch();
    }
}
