<div class="categoryQuestions view">
<h2><?php echo __('Category Question'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoryQuestion['CategoryQuestion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryQuestion['Category']['name'], array('controller' => 'categories', 'action' => 'view', $categoryQuestion['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo h($categoryQuestion['CategoryQuestion']['question']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Option1'); ?></dt>
		<dd>
			<?php echo h($categoryQuestion['CategoryQuestion']['option1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Option2'); ?></dt>
		<dd>
			<?php echo h($categoryQuestion['CategoryQuestion']['option2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Option3'); ?></dt>
		<dd>
			<?php echo h($categoryQuestion['CategoryQuestion']['option3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Option4'); ?></dt>
		<dd>
			<?php echo h($categoryQuestion['CategoryQuestion']['option4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correct'); ?></dt>
		<dd>
			<?php echo h($categoryQuestion['CategoryQuestion']['correct']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category Question'), array('action' => 'edit', $categoryQuestion['CategoryQuestion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category Question'), array('action' => 'delete', $categoryQuestion['CategoryQuestion']['id']), array(), __('Are you sure you want to delete # %s?', $categoryQuestion['CategoryQuestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
