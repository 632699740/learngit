<?php

namespace app\controllers;
use yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Users;
use  yii\web\Session;
class IndexController extends Controller
{
    public $enableCsrfValidation = false;

    //展示登录页面
    public function actionIndex()
    {

        return $this->renderPartial('Index');
    }
    //添加
    public function actionForm_comp()
    {
        return $this->renderPartial('forms-components');
    }
    //执行添加
    public function actionAdd()
    {
        $session = Yii::$app->session;
        if(!isset($session['language'])){
            echo  "<script>location.href='index.php?r=login/login'</script>";die;
        }
        $username =\Yii::$app->request->post('username');
        $password = \Yii::$app->request->post('password');

        if(trim($username)=="" || trim($password)==""){
            return $this->renderPartial('forms-components');

    }
        $users=new Users();
        $users->username = $username;
        $users->password = $password;
        $re=$users->save();
        if($re){
            return $this->redirect(array('/index/tables'));
        }


}
        //列表
    public function actionTables()
    {
        $users=new Users();
        $re=$users->find()->asArray()->all();
        return $this->renderPartial('tables', ['re'=>$re]);
    }
        //修改
    public function actionUpd(){
        $id =\Yii::$app->request->get('id');
        if(trim($id)==""){
            return $this->redirect(array('/index/tables'));
        }
        $users=new Users();
        $re=$users->find()->where(['id'=>$id])->asArray()->one();
        return $this->renderPartial('upd', ['re'=>$re]);
    }
    //修改
    public function actionUpd_pro(){

        $password = \Yii::$app->request->post('password');
        $id =\Yii::$app->request->post('id');

        if( trim($password)=="" || trim($id)==""){
            return $this->redirect(array('/index/tables'));
        }
        $users=new Users();
        $up=$users->updateAll(['username'=>$username,'password'=>$password],['id'=>$id]);
        if($up){
            return $this->redirect(array('/index/tables'));
        }else{
            return $this->redirect(array('/index/upd'));
        }
    }
    //删除
    public function actionDel(){
        $session = Yii::$app->session;
        if(!isset($session['language'])){
            echo  "<script>location.href='index.php?r=login/login'</script>";die;
        }

        $id =\Yii::$app->request->get('id');

        if(trim($id)==""){
            return $this->redirect(array('/index/tables'));
        }
        $users=new Users();
        $users->findOne($id)->delete();
        return $this->redirect(array('/index/tables'));
    }
    //退出
    public function actionLogout(){
        $session = Yii::$app->session;
        unset($session['language']);
        if(!isset($session['language'])){
            echo  "<script>location.href='index.php?r=login/login'</script>";die;
        }


    }

}