<div class="userProfiles view">
<h2><?php echo __('User Profile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($userProfile['UserProfile']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userProfile['User']['id'], array('controller' => 'users', 'action' => 'view', $userProfile['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Profile'), array('action' => 'edit', $userProfile['UserProfile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Profile'), array('action' => 'delete', $userProfile['UserProfile']['id']), array(), __('Are you sure you want to delete # %s?', $userProfile['UserProfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Profile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
