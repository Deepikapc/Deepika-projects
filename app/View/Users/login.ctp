<div class="users form">
<?php echo $this->Form->create('User'); ?>
<?php echo $this->Html->image('climb.jpeg');?>
<?php echo $this->Html->image('onlinetest3.jpg');?>

<td>
<div style="float:left;margin-left:273px;width:25px;">  
</div>
</td>
    <fieldset>
        <legend><?php echo __('Login'); ?></legend>
        
  
              
<td><div style=div.form>

</td>
  <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        ?>
    
<?php echo $this->Form->end(__('Submit')); ?>

<?php echo $this->Html->link(__('Signup'), array('action' => 'add')); ?>
</fieldset>
</div>