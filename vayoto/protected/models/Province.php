<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 23/03/2019
 * Time: 22:26 CH
 */

class Province extends CActiveRecord
{

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function getData()
    {
        $connection = Yii::app()->db;
        $command = $connection->createCommand("Select * from province");
        return $caterow = $command->queryAll();
    }

}
