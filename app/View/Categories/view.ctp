<div class="categories view">
<h2><?php echo __('Category'); debug($questions);?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($questions['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($questions['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($questions['Category']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Questions'); ?></dt>
		
		<?php $i=0; foreach($questions['CategoryQuestion'] as $question):$i++;?>
		
		<?php echo $i.' ) '.$question['question']; ?>
		<br>
		<?php endforeach; ?>

	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array(), __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Questions'), array('controller' => 'category_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Question'), array('controller' => 'category_questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Test Results'), array('controller' => 'test_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test Result'), array('controller' => 'test_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Category Questions'); ?></h3>
	<?php if (!empty($category['CategoryQuestion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Question'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['CategoryQuestion'] as $categoryQuestion): ?>
		<tr>
			<td><?php echo $categoryQuestion['id']; ?></td>
			<td><?php echo $categoryQuestion['category_id']; ?></td>
			<td><?php echo $categoryQuestion['question']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'category_questions', 'action' => 'view', $categoryQuestion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'category_questions', 'action' => 'edit', $categoryQuestion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'category_questions', 'action' => 'delete', $categoryQuestion['id']), array(), __('Are you sure you want to delete # %s?', $categoryQuestion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Category Question'), array('controller' => 'category_questions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Test Results'); ?></h3>
	<?php if (!empty($category['TestResult'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Score'); ?></th>
		<th><?php echo __('Date Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['TestResult'] as $testResult): ?>
		<tr>
			<td><?php echo $testResult['id']; ?></td>
			<td><?php echo $testResult['category_id']; ?></td>
			<td><?php echo $testResult['user_id']; ?></td>
			<td><?php echo $testResult['score']; ?></td>
			<td><?php echo $testResult['date_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'test_results', 'action' => 'view', $testResult['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'test_results', 'action' => 'edit', $testResult['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'test_results', 'action' => 'delete', $testResult['id']), array(), __('Are you sure you want to delete # %s?', $testResult['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Test Result'), array('controller' => 'test_results', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
