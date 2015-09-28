<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="media">
	<br />
        
        <div class="media-body">
            <h3 class="media-heading">
                <?php echo CHtml::encode($data->getAttributeLabel('id')); ?>: <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
                <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?> <small><?php echo CHtml::encode($data->email); ?></small>
                    <p><?php echo CHtml::encode($data->password); ?></p>
            </h3>
        </div>

<!--	<?php // echo CHtml::encode($data->username); ?>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<br />

	<b><?php // echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>-->
	
	<br />


</div>