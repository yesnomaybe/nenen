<?php
/* @var $this DepartmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Departments',
);

$this->menu=array(
	array('label'=>'Create Department', 'url'=>array('create')),
	array('label'=>'Manage Department', 'url'=>array('admin')),
);
?>

<h1>Departments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'department-grid',
    'dataProvider'=>$dataProvider,
    'filter'=>$model,
    'columns'=>array(
        'id',
        'name',
        array(
            'header'=>'Employees',
            'value'=>'count($data->employees)',
        ),
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
