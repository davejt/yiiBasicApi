<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 31/03/2017
 * Time: 18:04
 */

namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{

    // Use rules() to mark attributes as 'safe' so when using POST the massive assignment works nice
    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'safe'],
        ];
    }
}