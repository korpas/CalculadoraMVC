<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20/11/15
 * Time: 1:59
 */

namespace controllers;


class IndexController
{
    public function indexAction()
    {
        require 'application/views/index.phtml';
    }

}