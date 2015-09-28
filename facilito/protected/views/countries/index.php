<h1>Countries</h1>
<?php echo CHtml::link('Crear', array('create')); ?>

<?php 
foreach ($countries as $countrie) {
    $estado = $countrie->status == 1 ? 'Enabled':'Disable';
    echo '<h3>'. $countrie->name .'<small>'. $estado .'</small></h3>';
}

