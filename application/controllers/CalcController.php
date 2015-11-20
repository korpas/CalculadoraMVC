<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20/11/15
 * Time: 2:00
 */

namespace controllers;

use models\CalcModel;

require 'application/models/CalcModel.php';




class CalcController
{
    public function sumaAction()
    {
        $action = 'doSuma';
        require 'application/views/form.phtml';
    }

    public function doSumaAction()
    {
        $model = new CalcModel($_POST['op1'], $_POST['op2']);
        $model->suma();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }

    public function restaAction()
    {
        $action = 'doResta';
        require 'application/views/form.phtml';
    }

    public function doRestaAction()
    {
        $model = new CalcModel($_POST['op1'], $_POST['op2']);
        $model->resta();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }

    public function multiplicarAction()
    {
        $action = 'doMultiplicar';
        require 'application/views/form.phtml';
    }

    public function doMultiplicarAction()
    {
        $model = new CalcModel($_POST['op1'], $_POST['op2']);
        $model->multiplicar();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }
    public function dividirAction()
    {
        $action = 'doDividir';
        require 'application/views/form.phtml';
    }

    public function doDividirAction()
    {
        $model = new CalcModel($_POST['op1'], $_POST['op2']);
        $model->dividir();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }
}