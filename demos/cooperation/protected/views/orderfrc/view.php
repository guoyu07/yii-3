<?php
$this->breadcrumbs=array(
	'������Ϣ'=>'index',
	$model->order_no,
);
$this->pageTitle=$model->order_no; 
  
?>

<div id="Orderfcr">

<h1>��������</h1>

<table>
	<tr>
		<td>�����ţ�</td>
		<td><?php echo $model->order_no;  ?></td>
	</tr>
	<tr>
		<td>ʱ�䣺</td>
		<td><?php echo date('Y-m-d H:i:s',$model->created);  ?></td>
	</tr>

</table>

</div><!-- comments -->
