<?php 
namespace app\models;

use yii\db\ActiveRecord;

class Creditrequests extends ActiveRecord
{
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName()
    {
        return 'prfx_credit_requests';
    }
}