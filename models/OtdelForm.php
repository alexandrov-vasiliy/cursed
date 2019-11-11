<?php
/**
 * Created by PhpStorm.
 * User: ClassUser
 * Date: 11.11.2019
 * Time: 15:49
 */

namespace app\models;

use yii\db\ActiveRecord;

 class OtdelForm extends ActiveRecord
{




    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'content'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly

        ];
    }
     public static function tableName()
     {
         return '{{it_otdel}}';
     }
}