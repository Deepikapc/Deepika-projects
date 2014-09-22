<div class="categoryQuestions form">
<?php echo $this->Form->create('CategoryQuestion'); ?>
	<fieldset>
		<legend><?php echo __('Add Category Question'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('question');
		echo $this->Form->input('option1');
		echo $this->Form->input('option2');
		echo $this->Form->input('option3');
		echo $this->Form->input('option4');
		echo $this->Form->input('correct',array('options'=>array('option1'=>'option1','option2'=>'option2','option3'=>'option3','option4'=>'option4')));
		//echo $this->Form->input('correct');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Category Questions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
