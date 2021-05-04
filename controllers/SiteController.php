<?php namespace app\controllers;

use app\helpers\SiteHelper;
use app\models\Entity\Person;
use Yii;
use yii\web\Controller;

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
}
