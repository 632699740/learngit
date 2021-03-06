<?php

namespace app\controllers;
use app\models\Menu;
use app\models\Ip;
use yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Admin;
use  yii\web\Session;
class LoginController extends Controller
{
    public $enableCsrfValidation = false;

    //展示登录页面
    public function actionLogin()
    {
        return $this->renderPartial('login');
    }
    //处理登录信息
    public function actionLogin_pro()
    {
        $ip=$_SERVER["REMOTE_ADDR"];
        $username =\Yii::$app->request->post('username');
        $password = md5(\Yii::$app->request->post('password'));
        $users = new Admin();
        $re=$users->find()->where(['admin_name'=>$username,'password'=>$password])->asArray()->one();
        if($re){
            $session = Yii::$app->session;
            $session->set('language', $username);
            return $this->redirect(array('/index/my'));
        }else{
            return $this->render('login');
        }

    }

}