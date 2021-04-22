<?php

namespace app\common\components;

use yii\web\UrlManager;

class LangUrlManager extends UrlManager
{
    public function createUrl($params)
    {
        if( isset($params['lang_id'])){

            if($params['lang_id'] == 'ru_RU')
            {
                $locale='ru';
            }
            elseif ($params['lang_id'] == 'uk_Ua')
            {
                $locale='uk';
            }


        }


        else {

            $locale='';

        }

        $url = parent::createUrl($params);
        //$url = parse_url(parent::createUrl($params));
        //var_dump(explode('/', $url['path']));

        return $url;
    }
}