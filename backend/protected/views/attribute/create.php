<?php
/* @var $this AttributeModelController */
/* @var $model AttributeModel */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'attribute-model-create-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // See class documentation of CActiveForm for details on this,
        // you need to use the performAjaxValidation()-method described there.
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <div class="row">
        <?php echo $form->labelEx($model,'cat_id'); ?>
        <?php echo $form->dropDownList($model,'cat_id',$category,array('empty'=>'请选择')); ?>
        <?php echo $form->error($model,'cat_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'values'); ?>
        <?php echo $form->textField($model,'values'); ?>
        <?php echo $form->error($model,'values'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'input_type'); ?>
        <?php echo $form->textField($model,'input_type'); ?>
        <?php echo $form->error($model,'input_type'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'is_effect'); ?>
        <?php echo $form->textField($model,'is_effect'); ?>
        <?php echo $form->error($model,'is_effect'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'sort'); ?>
        <?php echo $form->textField($model,'sort'); ?>
        <?php echo $form->error($model,'sort'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name'); ?>
        <?php echo $form->error($model,'name'); ?>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->