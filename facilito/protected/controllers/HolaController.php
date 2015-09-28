<?php

class HolaController extends Controller
{
        //http://localhost/yii-uno-curso/facilito/hola/index
	public function actionIndex()
	{
            $model = Users::model()->findAll();
//            $model = CActiveRecord::model("Users")->findAll();
            $twitter = '@codigofacilito';
            $this->render('index', array('model'=>$model,'twitter'=>$twitter ));
	}
}