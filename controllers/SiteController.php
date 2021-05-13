<?php namespace app\controllers;

use app\helpers\SiteHelper;
use app\models\Entity\Person;
use Yii;
use yii\web\Controller;
use yii\web\Response;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
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
     */
    public function actionIndex()
    {
        $person = null;
        $get = Yii::$app->request->get();

        if (isset($get['key'])) {
            $person = Person::findOne(['key' => $get['key']]);
        }

        return $this->render('index', [
            'invitation' => SiteHelper::getInvitation($person)
        ]);
    }

    public function actionPersonData()
    {
        $model = Person::find()->all();
        return $this->render('index', [
            'model' => $model
        ]);
    }

    public function actionToAcceptInvitation()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $get = Yii::$app->request->get();

        if ($get['key']) {
            $p = Person::findOne(['key' => $get['key']]);
            if ($p) {
                switch ($get['val']) {
                    case Person::STATUS_YES:
                        $p->status = Person::STATUS_YES;
                        break;
                    case Person::STATUS_NO:
                        $p->status = Person::STATUS_NO;
                        break;
                }
                return $p->save();
            }
        }
        return false;
    }
}
