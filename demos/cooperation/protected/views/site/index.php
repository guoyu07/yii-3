<?php
$this->layout  = 'column3';
$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	'��������',
);
?>
<div style="padding:10px 0px;" >
<div class="last_order" >
	<div class="t">
		���¶�����Ϣ
	</div>
	
	<div class="b" >
<?php 
$dataProvider=new CActiveDataProvider('Orderfrc');

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider, 
    'itemView'=>'_order_item', 
));

?>	</div>
</div> 



<div class="sort_menu" >

<div class='b' >
	<?php 
	
	//��ҳ���� 
	echo CHtml::link( '��Ʊ������¼', array('orderfcr/index')); 
	
	?>
	&nbsp;&nbsp;
	
	<?php
	echo CHtml::link( '��Ա��Ϣ', array('order/index'));  
	?>
</div>

</div>

</div>