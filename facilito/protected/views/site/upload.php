<?php
$this->breadcrumbs = array('Subir imagenes');
?>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'method' => 'POST',
        'action' => yii::app()->createUrl('site/upload'),
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        ),
        'enableClientValidation' => true,
        'clientOptions' => array
            (
            'validateOnSubmit' => true,
        )
            )
    );
    ?>

    <div class="row">
        <?php
        echo $form->labelEx($model, 'title');
        echo $form->textField($model, 'title');
        echo $form->error($model, 'title', array('class' => 'text-error'));
        ?>
    </div>

    <div class="row">
        <?php
        $this->widget('CMultiFileUpload', array(
            'model' => $model,
            'name' => 'image',
            'attribute' => 'images',
            'accept' => 'jpg|gif|png',
            'denied' => 'El tipo de archivo no es de los permitidos',
            'duplicate' => 'Archivo duplicado',
            'max' => 2,
//            'htmlOptions' => array('multiple' => 'multiple', 'size' => 2),
            'selected' => 'hola mundo'
        ));
        echo $form->error($model, 'images');
        ?>
    </div>

    <div class="row">
<?php echo CHtml::submitButton('Subir imagen', array('class' => 'btn btn-primary')); ?>
    </div>

<?php $this->endWidget(); ?>
</div>
