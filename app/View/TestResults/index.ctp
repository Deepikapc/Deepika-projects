<div class="testResults index">
	<h2><?php echo __('Test Results'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>Id</th>
			<th>category</th>
			<th>username</th>
			<th>score</th>
			<th>date_time</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $j=0; foreach ($final as $testResult): $j++;?>
	<tr>
		<td><?php echo $j; ?>&nbsp;</td>
		<td>
			<?php echo h($testResult['name']); ?>&nbsp;</td>
		
		<td><?php echo $this->Session->read('Auth.User.username'); ?>&nbsp;</td>
			
		<td><?php echo (($testResult['score']/$testResult['count']) *100).' '.'%'; ?>&nbsp;</td>
	
		<td><?php echo h($testResult['date_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $testResult['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $testResult['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $testResult['id']), array(), __('Are you sure you want to delete # %s?', $testResult['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Test Result'), array('action' => 'add')); ?></li>
		
	</ul>
</div>
