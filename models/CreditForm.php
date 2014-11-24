<?php

namespace app\models;

use yii\db\ActiveRecord;

class CreditForm extends ActiveRecord
{

    public function rules()
    {
        return [
            [['creditInfo', 'inputPeriod', 'amount', 'agree', 'email', 'firstName', 'inputSecondName', 'calltime', 'phone', 'birthdayDay', 'birthdayMounth', 'birthdayYear'], 'required', 'message' => 'Обязательное поле'],
            ['email', 'email'],
            [['firstName', 'inputSecondName', 'oldSecondName'], 'match', 'pattern' => '/^[А-я\s]+$/u', 'message' => 'Только русскими буквами'],
            [['inputPeriod', 'amount', 'birthdayDay', 'birthdayMounth', 'birthdayYear'], 'number', 'message' => 'Только числа'],
            [['agree', 'isOldSecondName'], 'boolean', 'trueValue' => true, 'falseValue' => false],
        ];
    }

    public static function tableName()
    {
        return 'prfx_credit_requests';
    }

}