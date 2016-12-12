<?php
/**
 * Created by PhpStorm.
 * User: rosl
 * Date: 12.12.16
 * Time: 2:21
 */

namespace app\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\Response;

class CurrencyController extends ActiveController
{
 public $modelClass = 'app\models\Currency';

 public function beforeAction($action)
 {
	 Yii::$app->response->format = Response::FORMAT_JSON;
	 return parent::beforeAction($action); // TODO: Change the autogenerated stub
 }
}