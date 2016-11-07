<?php

include_once ROOT . '/models/Numbers.php';

class MainController
{
    public function actionIndex()
    {
        $numbers = array();
        $numbers = Numbers::getNumbers();

        require_once(ROOT . '/views/index.php');
        return true;
    }

    public function actionUpdate($id)
    {
        if ($id) {
            $number = array();

            if (isset($_POST['update'])) {
                $number['name'] = $_POST['form_name'];
                $number['number'] = $_POST['form_number'];
                $number['description'] = $_POST['form_description'];
                Numbers::updateNumber($id, $number);

            }

            $numbersItem = Numbers::getNumderById($id);
            require_once(ROOT . '/views/update.php');


        }

    }

    public function actionAdd()
    {
        require_once(ROOT . '/views/add.php');
        $number = array();
        if (isset($_POST['add'])) {
            $number['name'] = $_POST['form_name'];
            $number['number'] = $_POST['form_number'];
            $number['description'] = $_POST['form_description'];
            $number['time'] = time();
            Numbers::setNumber($number);
            return true;
        }

    }
    public function actionDelete($id)
    {
        if ($id) {
            if (Numbers::deleteNumderById($id)){
                echo 'DELETE:YES';
            }else echo 'DELETE:NO';
            return true;
        }

    }
}