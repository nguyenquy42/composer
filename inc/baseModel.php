<?php

class baseModel
{
    public static function load($model)
    {

        // duong dan toi file model
        $duongdan = 'module'.DS.$model.'model.php';

        // kiem tra duong dan ton tai
        if (file_exists($duongdan))
        {
            require_once $duongdan;
            $tenmodel = $model.'model';
            return new $tenmodel;
        }
    }
} 

?>