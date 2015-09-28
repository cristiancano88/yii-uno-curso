<?php

class CountriesController extends Controller {

    //http://localhost/yii-uno-curso/facilito/hola/index
    public function actionIndex() {
        $countries = Countries::model()->findAll();
        $this->render('index', array('countries' => $countries));
    }

    public function actionCreate() {
//        var_dump($_POST);
//        yii::app()->end(); //esta linea es equivalente a "exit y die"
        
        $model = new Countries();
        if ( isset($_POST['Countries']) ) {
            $model->attributes = $_POST['Countries'];
            
//            $model->name = $_POST['Countries']['name'];
//            $model->status = $_POST['Countries']['status'];
            if ( $model->save() ) {
                $this->redirect(array("index"));
            }
        }
        $this->render('create', array('model' => $model));
    }
}