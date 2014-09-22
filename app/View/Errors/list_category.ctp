<div class="categories index">
	<h2><?php echo __('Categories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	
	</thead>
	<tbody>
	<?php $c=0;
	 foreach ($categories as $key=>$value):$c++; ?>
	<tr>
		<td><?php echo $c; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($value,array('controller'=>'category_questions','action'=>'list_questions',$key),array('confirm'=>'Are you sure you want to start the test ?')); ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>

