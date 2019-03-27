<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 23/03/2019
 * Time: 22:26 CH
 */

class District extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function getData() {
        $connection = Yii::app()->db;
        $command = $connection->createCommand("Select * from district");
        return $caterow = $command->queryAll();
    }
}
