<?php
/**
 * Created by PhpStorm.
 * User: ufo
 * Date: 17-6-5
 * Time: 下午7:12
 */

namespace eonline;


use yii\base\Model;

class Module extends Model
{

    public $controllerNamespace = 'eonline\controllers';

    public function init()
    {
        parent::init();

    }

}