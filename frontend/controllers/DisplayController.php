<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Article;
use common\models\Album;
use common\models\Comment;
use common\models\Visitor;
use common\models\Advice;
use yii\web\Response;
use yii\bootstrap\ActiveForm;
use  yii\web\Session;

/**
 * Site controller
 */
class DisplayController extends Controller
{
    /**
     * @inheritdoc
     */
    public $layout = 'newmain';

    public function actionIndex()
    {
        $article = new Article();

        $tuijian_article_data = $article -> find() -> where(['between', 'type', 4, 8]) -> limit(5) ->all ();


        $shoubu_article_data = $article -> find() -> where(array('type' => 1)) -> limit(4) ->all ();

        $daping_article_data = $article -> find() -> where(array('type' => 9)) ->all ();

        $xinling_article_data = $article -> find() -> where(array('type' => 10)) -> limit(3) ->all ();

        $connection = Yii::$app->db;
        $command = $connection->createCommand('select * from article where article.id in (select t.article_id from (select article_id, count(article_id) as num from comment group by article_id order by count(article_id) DESC limit 5)as t)');
        $reping = $command->queryAll();

        return $this->render('index',[
            'tuijian_article_data' => $tuijian_article_data,
            'shoubu_article_data' => $shoubu_article_data,
            'daping_article_data' => $daping_article_data,
            'xinling_article_data' => $xinling_article_data,
            'reping' => $reping,
            ]);
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionDetails()
    {

        if ($_GET['id']){
            $article = new Article();
            $comment = new Comment();
            //查询出对应文章

            $article_data = $article -> find() -> where(['id' => $_GET['id']]) -> One();

            //查询出文章对应的评论

            $comment_data = $comment -> find() -> where(array('article_id' => $_GET['id'], 'type' => 1))  ->orderBy('comment_time DESC')->limit(5)-> all();

            $ar_id = $_GET['id'];

            $model = new Comment();

            $model->article_id =$_GET['id'];

            return $this->render('details',[
                'article_data' => $article_data,
                'comment_data' => $comment_data,
                'ar_id' => $ar_id,
                'model'=> $model,
                ]);
        }


        // 获取参数失败的情况

        return $this->render('wedding');
    }

    public function actionGallery()
    {
        $album = new Album();

        $album_list = $album ->find() -> where(['type' => 1])  -> all();

        return $this->render('gallery',[
            'album_list' => $album_list,
            ]);
    }
 

    public function actionYoukepinglun()
    {


        $model = new Comment();

        $model->article_id = $_GET['arid'];

     /*   if ($_SESSION['youkename']){
            $model->name=$_SESSION['youkename'];
        }
        else*/
        $youke = "";
        if (isset(Yii::$app->session['youkename'])){
            $youke .= Yii::$app->session['youkename'];    
        }
        else{
            $youke .= "游客";
            $youke .= date('Y-m-d H:i:s');
        }
        $model->name = $youke;
        $model->content = $_GET['content'];

        Yii::$app->response->format = Response::FORMAT_JSON;
        return ['status' => $model->save()
        ];

    }


    public function actionYoukelogin()
    {
       /* $_SESSION['youkename'] = "4356456456";
        echo "11111";
        echo $_SESSION['youkename'];
        echo "22222";
        return $this->render('contact');*/

        $model = new Visitor();

        $model->name = $_GET['dengluname'];
        $model->email = $_GET['dengluemail'];

        $visitnum =$model -> find() -> where(array('name' => $_GET['dengluname'], 'email' => $_GET['dengluemail'])) -> count();
        if ($visitnum == 1){
        /*    $lifetime=600;
            session_set_cookie_params($lifetime);
            $session = Yii::$app->session;
            $session->open();*/
            Yii::$app->session['youkename'] = $_GET['dengluname'];
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['status' => "true"
            ];
        }
        else{
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['status' => "false"
            ];   
        }

    }


    public function actionYoukezhuce()
    {

        $model = new Visitor();

        $model->name = $_GET['zhucename'];
        $model->email = $_GET['zhuceemail'];

        $visitnum =$model -> find() -> where(array('name' => $_GET['zhucename'])) -> count();
        if ($visitnum == 1){
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['status' => "hasname"
            ];            
        }

        $visitnum =$model -> find() -> where(array('email' => $_GET['zhuceemail'])) -> count();
        if ($visitnum == 1){
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['status' => "hasemail"
            ];            
        }
        

        Yii::$app->response->format = Response::FORMAT_JSON;
        return ['status' => $model->save()
        ];

    }

    public function actionFankui()
    {


        $model = new Advice();

        $model->name = $_GET['email'];
        $model->content = $_GET['content'];

        Yii::$app->response->format = Response::FORMAT_JSON;
        return ['status' => $model->save()
        ];

    }

    public function actionCommentlist()
    {


        $comment = new Comment();

        $comment_data = $comment -> find() -> where(array('article_id' => $_GET['arid'], 'type' => 1))  ->orderBy('comment_time DESC')-> limit(10) ->all();

        Yii::$app->response->format = Response::FORMAT_JSON;
        return $comment_data;

    }

    public function actionWedding()
    {

        $article = new Article();

        $article_list_4_1 = $article -> find() -> where(['type' => 1]) ->orderBy('update_time DESC') ->limit(4) -> all();

        $article_list_4_2 = $article -> find() -> where(['type' => 2]) ->orderBy('update_time DESC') -> limit(4) -> all();

        $article_list_1_3 = $article -> find() -> where(['type' => 3]) -> all();

        return $this->render('wedding', [
            'article_list_4_1' => $article_list_4_1,
            'article_list_4_2' => $article_list_4_2,
            'article_list_1_3' => $article_list_1_3,
        ]);
    }

    public function actionBloginfo(){
        
        $comment = new Comment();
        $article = new Article();

        $blog['num'] = $comment -> find() -> count();
        $blog['article_num'] = $article ->find() -> count();

        Yii::$app->response->format = Response::FORMAT_JSON;
        return $blog;
    }
}