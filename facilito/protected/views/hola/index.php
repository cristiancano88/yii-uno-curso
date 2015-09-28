<h1>Siguenos en twitter <?php echo $twitter; ?></h1>
<?php foreach ($model as $data): ?>
<h2><?php echo $data->username; ?></h2>
<?php endforeach;