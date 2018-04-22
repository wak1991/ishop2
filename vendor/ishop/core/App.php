<?php

namespace ishop;


class App
{
    public static $app;

    public function __construct()
    {
       // строка запроса
       $query = trim($_SERVER['QUERY_STRING'], '/');
       // стартуем сессию
       session_start();
       self::$app = Registry::instance();
       $this->getParams();
       new ErrorHendler();
       Router::dispatch($query);
    }

    protected function getParams()
    {
        $params = require_once CONF . '/params.php';
        if(!empty($params))
        {
            foreach ($params as $k => $v)
            {
                self::$app->setProperty($k, $v);
            }
        }
    }
}