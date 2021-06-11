<?php namespace app\controllers;

use app\models\Entity\Person;
use yii\data\ArrayDataProvider;
use yii\db\Query;
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

        $model = Person::find()->all();
        $count = (new Query())->select('SUM(count)')
            ->from(Person::tableName())
            ->where([
                'status' => 1,
            ])
            ->one();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $model,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'count' => $count
        ]);
    }

}
