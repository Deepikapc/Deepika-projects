<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($user['UserProfile']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($user['UserProfile']['lastname']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Test Results'), array('controller' => 'test_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test Result'), array('controller' => 'test_results', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Profiles'), array('controller' => 'user_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Profile'), array('controller' => 'user_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Test Results'); ?></h3>
	<?php if (!empty($user['TestResult'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Score'); ?></th>
		<th><?php echo __('Date Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['TestResult'] as $testResult): ?>
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
<div class="related">
	<h3><?php echo __('Related User Profiles'); ?></h3>
	<?php if (!empty($user['UserProfile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserProfile'] as $userProfile): ?>
		<tr>
			<td><?php echo $userProfile['id']; ?></td>
			<td><?php echo $userProfile['firstname']; ?></td>
			<td><?php echo $userProfile['lastname']; ?></td>
			<td><?php echo $userProfile['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_profiles', 'action' => 'view', $userProfile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_profiles', 'action' => 'edit', $userProfile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_profiles', 'action' => 'delete', $userProfile['id']), array(), __('Are you sure you want to delete # %s?', $userProfile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Profile'), array('controller' => 'user_profiles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
