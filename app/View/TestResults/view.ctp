<div class="testResults view">
<h2><?php echo __('Test Result'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($testResult['TestResult']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($testResult['Category']['name'], array('controller' => 'categories', 'action' => 'view', $testResult['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($testResult['User']['id'], array('controller' => 'users', 'action' => 'view', $testResult['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score'); ?></dt>
		<dd>
			<?php echo h($testResult['TestResult']['score']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Time'); ?></dt>
		<dd>
			<?php echo h($testResult['TestResult']['date_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Test Result'), array('action' => 'edit', $testResult['TestResult']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Test Result'), array('action' => 'delete', $testResult['TestResult']['id']), array(), __('Are you sure you want to delete # %s?', $testResult['TestResult']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Test Results'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test Result'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
