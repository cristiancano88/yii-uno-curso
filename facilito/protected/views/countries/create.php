<h1>Create Countries</h1>
<?php $form=$this->beginWidget('CActiveForm'); ?>

<b>Nombre</b>
<?php echo $form->textField($model,'name'); ?>
<?php echo $form->error($model,'name'); ?>
<br>

<b>Estado</b>
<?php echo $form->textField($model,'status'); ?>
<?php echo $form->error($model,'status'); ?>
<br>

<?php echo CHtml::submitButton('Crear', array('class'=>'btn btn-primary btn-large')); ?>

<?php $this->endWidget(); ?>

