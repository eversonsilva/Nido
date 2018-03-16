<?php
/* @var $this FilmeController */
/* @var $model Filme */

$this->breadcrumbs=array(
	'Filmes'=>array('index'),
	$model->id_filme,
);

$this->menu=array(
	array('label'=>'List Filme', 'url'=>array('index')),
	array('label'=>'Create Filme', 'url'=>array('create')),
	array('label'=>'Update Filme', 'url'=>array('update', 'id'=>$model->id_filme)),
	array('label'=>'Delete Filme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_filme),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Filme', 'url'=>array('admin')),
);
?>

<h1>View Filme #<?php echo $model->id_filme; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_filme',
		'nomeFilme',
		'anoFilme',
		'imgFilme',
	),
)); ?>
