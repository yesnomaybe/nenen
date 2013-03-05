<?php
/* @var $this DepartmentController */
/* @var $data Department */
?>

<div class="view" onclick="location.href='<?php echo CHtml::encode($this->id).'/'.CHtml::encode($data->id) ?>';" style="cursor: pointer;" onmouseover="this.style.background='#eeeeee';" onmouseout="this.style.background='white';">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>