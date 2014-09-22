<!DOCTYPE html>
<html>
<?php 
echo $this->Html->image('welcome to online exam.jpg');?>
<head>
<style>
#header {
    background-color:blue;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:300px;
    width:100px;
    float:left;
    padding:5px;	      
}

#footer {
    background-color:blue;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
</style>
</head>

<body>

<div id="header">
<h1>Online Examination</h1>
</div>
<div id="nav">

<?php $c=0;
	 foreach ($categories as $key=>$value):$c++; ?>
	<tr>
		<td><?php echo $c; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($value,array('controller'=>'category_questions','action'=>'list_questions',$key),array('confirm'=>'Are you sure you want to start the test ?')); ?>&nbsp;</td>
		<br/>
	</tr>
<?php endforeach; ?>
</div>

<div id="section">
                                                   
                        Instructions:<br />
                            
                             1.Total no. of questions :10<br />
                             2.Timeings :10minutes<br />
                             3.Each questions carries one mark<br />
                             4.No negetive mark

<h2></h2>
</div>

<div id="footer">
Online Test
</div>

</body>
</html>
