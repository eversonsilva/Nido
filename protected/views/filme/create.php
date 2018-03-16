<?php
/* @var $this FilmeController */
/* @var $model Filme */

$this->breadcrumbs=array(
	'Filmes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Filme', 'url'=>array('index')),
	array('label'=>'Manage Filme', 'url'=>array('admin')),
);
?>

<h1>Create Filme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>