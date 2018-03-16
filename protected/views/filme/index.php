<?php
/* @var $this FilmeController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Create Filme', 'url'=>array('create')),
	array('label'=>'Manage Filme', 'url'=>array('admin')),
);
?>

<h1>Filmes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
