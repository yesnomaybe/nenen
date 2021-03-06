<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>


<?php

    echo Chtml::link(CHtml::encode($data->firstName." ".CHtml::encode($data->lastName)), array('view', 'id'=>$data->id));

?>




<div class="view" onclick="location.href='<?php echo CHtml::encode($this->id).'/'.CHtml::encode($data->id) ?>';" style="cursor: pointer;" onmouseover="this.style.background='#eeeeee';" onmouseout="this.style.background='white';">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentId')); ?>:</b>
	<?php echo CHtml::encode($data->department->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstName')); ?>:</b>
	<?php echo CHtml::encode($data->firstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastName')); ?>:</b>
	<?php echo CHtml::encode($data->lastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext')); ?>:</b>
	<?php echo CHtml::encode($data->ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hireDate')); ?>:</b>
	<?php echo CHtml::encode($data->hireDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('leaveDate')); ?>:</b>
	<?php echo CHtml::encode($data->leaveDate); ?>
	<br />


</div>

