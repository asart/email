<?php

namespace Controllers;

use Model\User;

class IndexController
{
    protected $view = __DIR__ . '/../templates/index.php';

    public function actionIndex()
    {
        $this->render($this->view);
    }

    public function actionEmail()
    {
        if (!empty( $_POST['email'] ) ) {
            $email = User::findOne( $_POST['email'] );
            if(!empty($email) ){
                $this->rusult = $email;
            } else {
                $this->noresult = $_POST['email'];
            }
            $this->render($this->view);
        }
    }

    public function actionJson()
    {
        if ( !empty( $_GET['char'] ) ) {
            $data = User::findAllByChar($_GET['char']);
            echo json_encode($data);
            die;
        }
    }

    public function render($view)
    {
        include $view;
    }
}
