<div class="categoryQuestions form">
<?php echo $this->Form->create('CategoryQuestion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Category Question'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('question');
		echo $this->Form->input('option1');
		echo $this->Form->input('option2');
		echo $this->Form->input('option3');
		echo $this->Form->input('option4');
		echo $this->Form->input('correct');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CategoryQuestion.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CategoryQuestion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Category Questions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
