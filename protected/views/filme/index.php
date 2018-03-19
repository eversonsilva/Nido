<?php
/* @var $this FilmeController */
/* @var $dataProvider CActiveDataProvider */

if(Yii::app()->user->isAdm()){
	$this->menu=array(
		array('label'=>'Create Filme', 'url'=>array('create')),
		array('label'=>'Manage Filme', 'url'=>array('admin')),
	);
}
?>

<h1>Filmes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
