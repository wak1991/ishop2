<?php

namespace app\controllers;


use ishop\Cache;

class MainController extends AppController
{

    public function indexAction()
    {
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);
        $this->setMeta('Главная', 'Описание', 'Ключенвики');
        $name = 'Andrey';
        $age = 30;
        $names = ['Viktor', 'John', 'Nik'];
        $cache = Cache::instance();
        $data = $cache->get('test');
        if(!$data){
            $cache->set('test', $names);
        }
        debug($data);
        $this->set(compact('name','age', 'names', 'posts'));
    }
}