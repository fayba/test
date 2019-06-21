<?php
namespace app\index\controller;
use think\Controller;
use app\index\controller\Common;
use app\index\model\Article;
class Index extends Common
{
    public function index()
    {
        //首页最新文章调用
        $articleModel=new Article();
        $newArticle=$articleModel->getNewArticle();
        $this->assign(array(
        	'newArticle'=>$newArticle,
        	));
        return view();
    }
    
}
