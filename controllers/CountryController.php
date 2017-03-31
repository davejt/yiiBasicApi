<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 31/03/2017
 * Time: 18:05
 */

namespace app\controllers;

use yii\rest\ActiveController;

class CountryController extends ActiveController
{
    public $modelClass = 'app\models\Country';
}