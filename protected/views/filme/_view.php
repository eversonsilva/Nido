<?php
/* @var $this FilmeController */
/* @var $data Filme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_filme')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_filme), array('view', 'id'=>$data->id_filme)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomeFilme')); ?>:</b>
	<?php echo CHtml::encode($data->nomeFilme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anoFilme')); ?>:</b>
	<?php echo CHtml::encode($data->anoFilme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imgFilme')); ?>:</b>
	<?php echo CHtml::encode($data->imgFilme); ?>
	<br />


</div>