<?php

class FormUpload extends CFormModel {

    public $title;
    public $images;

    public function rules() {
        return array(
            array('title,images', 'required'),
//            array('email', 'length', 'max' => 100),
//            array('username, password', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
//            array('id, username, password, email', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels() {
        return array(
            'title' => 'Titulo',
            'images' => 'Imagen'
        );
    }

}
