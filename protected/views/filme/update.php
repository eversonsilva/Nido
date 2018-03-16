<?php
/* @var $this FilmeController */
/* @var $model Filme */

$this->breadcrumbs=array(
	'Filmes'=>array('index'),
	$model->id_filme=>array('view','id'=>$model->id_filme),
	'Update',
);

$this->menu=array(
	array('label'=>'List Filme', 'url'=>array('index')),
	array('label'=>'Create Filme', 'url'=>array('create')),
	array('label'=>'View Filme', 'url'=>array('view', 'id'=>$model->id_filme)),
	array('label'=>'Manage Filme', 'url'=>array('admin')),
);
?>

<h1>Update Filme <?php echo $model->id_filme; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>