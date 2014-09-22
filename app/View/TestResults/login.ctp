<div class="users form">
<?php echo $this->Form->create('TestResult'); ?>
    <fieldset>
        <legend><?php echo __('Login'); ?></legend>
    <?php
      
      
        echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<?php echo $this->Html->link(__('Signup'), array('action' => 'add')); ?>
</div>