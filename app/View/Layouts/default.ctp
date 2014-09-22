<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Online Test
	</title>
	<?php
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('deepika.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<?php echo 'Welcome '.$this->Session->read('Auth.User.username');?>
	<div id="container">
		<div id="header">
		<li style="float:left;">
             <?php echo $this->Html->link('Home',array('controller'=>'users','action'=>'home_dashboard')); ?>
              
            </li>
            <li style="float:left;margin-left:50px;">
            <?php echo $this->Html->link('Examination',array('controller'=>'users','action'=>'examination_dashboard')); ?>
            </li>
            
            <li style="float:left;margin-left:80px;">
            
            <?php if($this->Session->read('Auth.User.login_type') == 'admin'){
            	           echo $this->Html->link('Results',array('controller'=>'test_results','action'=>'index'));
                      }elseif($this->Session->read('Auth.User.login_type') == 'user'){
			            	echo $this->Html->link('Results',array('controller'=>'users','action'=>'results_dashboard'));
			          }elseif(empty($this->Session->read('Auth.User.login_type'))){
			          	   echo $this->Html->link('Results',array('controller'=>'users','action'=>'no_access'));
			          }; ?>&nbsp;
            </li>
            <td></td>
			
            <li style="float:left;margin-left:120px;">
            <?php echo $this->Html->link('About us',array('controller'=>'users','action'=>'aboutus_dashboard')); ?>
            </li>
            <li style="float:right;">
            <?php if($this->Session->read('Auth.User')): ?>
             <?php echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout')); ?>
             <?php endif; ?>
            </li>
           </div>
		</div>
        		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $this->fetch('content'); ?>
			</div>
</body>
</html>
