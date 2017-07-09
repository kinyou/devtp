<?php
/**
 * Desc  功能说明
 * User: maogou
 * Date: 2017/7/8
 * Time: 下午11:25
 */
namespace Home\Controller;

use Home\Model\CardModel;
use Home\Model\CommentModel;
use Home\Model\UsersModel;
use Think\Controller;

class DemoController extends Controller
{
    //一对一 和 一属于一
    public function index(){
        $user = new UsersModel();
        $result = $user->relation('Card')->select();
        dump($result);

        $card = new CardModel();
        $result = $card->relation(true)->select();
        dump($result);
    }


    //一对多 和 多对一
    public function comment(){
        $user = new UsersModel();
        $result = $user->relation('Comment')->select();
        dump($result);

        $comment = new CommentModel();
        $result = $comment->relation('Users')->select();
        dump($result);
    }

    //多对多关系
    public function many(){
        $user = new UsersModel();
        $result = $user->relation('Role')->select();
        dump($result);

    }
}