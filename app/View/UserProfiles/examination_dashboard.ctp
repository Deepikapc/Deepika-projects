<!DOCTYPE html>
<html>
<head>
<style>
#header1 {
     background-color:#fff;
    color: #003d4c;
    text-align:center;
    padding:12px;
    height= 800px;
}

#nav1 {
    line-height:30px;
    background-color:#DDD;
    height:400px;
    width:100px;
    float:left;
    padding:8px;	      
}

#footer {
    background-color:#fff;
    color: #003d4c;
    clear:both;
    text-align:center;
   padding:5px;	 	 	 
}
</style>
</head>
<?php
echo "welcome to online examination";
?>
<?php $c=0;
	 foreach ($categories as $key=>$value):$c++; ?>
	<tr>
		<td><?php echo $c; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($value,array('controller'=>'category_questions','action'=>'list_questions',$key),array('confirm'=>'Are you sure you want to start the test ?')); ?>&nbsp;</td>
		<br/>
	</tr>
<?php endforeach; ?>
