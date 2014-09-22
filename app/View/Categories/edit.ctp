<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Edit Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('value'=>$categoryDetail['Category']['name']));
		echo $this->Form->input('description',array('value'=>$categoryDetail['Category']['description']));
		//echo $this->Form->input('question',array('value'=>$categoryDetail['CategoryQueation']['question']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Category.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Category.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Category Questions'), array('controller' => 'category_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Question'), array('controller' => 'category_questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Test Results'), array('controller' => 'test_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test Result'), array('controller' => 'test_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
