<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		//echo $this->Form->input('question');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Category Questions'), array('controller' => 'category_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Question'), array('controller' => 'category_questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Test Results'), array('controller' => 'test_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test Result'), array('controller' => 'test_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
