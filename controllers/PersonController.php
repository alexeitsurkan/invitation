<?php namespace app\controllers;

use app\models\Entity\Person;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use yii\web\HttpException;

/**
 * Class PersonController
 * @package app\controllers
 */
class PersonController extends Controller
{

    /**
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * @return string
     * @throws HttpException
     */
    public function actionIndex()
    {
        $get = \Yii::$app->request->get();

        if(empty($get['key']) || $get['key']!=123)
            throw new HttpException('404');

        $dataProvider = new ArrayDataProvider([
            'allModels' => Person::find()->all(),
//            'sort' => [
//                'attributes' => ['id', 'username', 'email'],
//            ],
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
