<?php
/* @var $this FilmeController */
/* @var $model Filme */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_filme'); ?>
		<?php echo $form->textField($model,'id_filme'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomeFilme'); ?>
		<?php echo $form->textField($model,'nomeFilme',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anoFilme'); ?>
		<?php echo $form->textField($model,'anoFilme'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imgFilme'); ?>
		<?php echo $form->textField($model,'imgFilme',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->