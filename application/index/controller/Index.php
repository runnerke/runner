<?php
namespace app\index\controller;
use think\Db;
use think\Session;
use think\Config;
use think\cache\driver\Redis;
use think\Validate;

class Index
{
    public function index()
    {
        include_once ROOT_PATH."vendor/phpexcel/phpexcel/Classes/PHPExcel.php"; //添加读取excel所需的类文件
        include_once ROOT_PATH."vendor/phpexcel/phpexcel/Classes/PHPExcel/Style/NumberFormat.php"; //添加读取excel所需的类文件
        include_once ROOT_PATH."vendor/phpexcel/phpexcel/Classes/PHPExcel/Style/Alignment.php"; //添加读取excel所需的类文件

        $NumberFormat = new  \PHPExcel_Style_NumberFormat();
        $objPHPExcel = new \PHPExcel();
        $objSheet = $objPHPExcel->getActiveSheet();        //选取当前的sheet对象
        $objSheet->setTitle('班次售票统计');
        var_dump($objSheet);
    }
    public function edit(){
        echo 222;
    }
    public function add1(){

    }
    public function add2(){

    }
}
