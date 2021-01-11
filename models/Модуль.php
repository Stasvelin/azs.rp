<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Модуль".
 * *
 * @property 
 */

class Модуль extends CRUD
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Модуль';
    }
    
    
    public function getListEntryData(){
        $data = [];
        $data['href'] = Yii::$app->urlManager->createUrl(['модуль/view', 'id' => $this->id]);
        $data['title'] = $this->IMEI;
        $data['ID'] = $this->id;
        $data['Последняя активность'] = Yii::$app->formatter->format($this->времяПоследнейАктивности,'relativeTime');
        $data['Последнее обновление данных'] = Yii::$app->formatter->format($this->времяПоследнегоОбновления,'relativeTime');
        $statuses=[-1=>"Ошибка обновления", 0=>"Нет данных", 1=>"Успешно", 2=>"Идёт обновление"];
        $data['Статус обновления'] = $statuses[$this->статусОбновления];
        return $data;
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
