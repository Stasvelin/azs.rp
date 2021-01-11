<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Модуль".
 * *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $population
 */

class Модуль extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Модуль';
    }
    
    public function prepareData(){
        $this->времяПоследнегоОбновления = Yii::$app->formatter->
        format($this->времяПоследнегоОбновления, 'relativeTime');
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IMEI'], 'required'],
            [['IMEI'], 'string', 'max' => 15],
            [['IMEI'], 'string', 'min' => 15],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'IMEI' => 'IMEI',
            'времяПоследнейАктивности' => 'Время последней активности',
            'времяПоследнегоОбновления' => 'Время последнего обновления',
            'статусОбновления' => 'Статус обновления',
            
            
        ];
    }
}
