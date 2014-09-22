<!DOCTYPE html>
<html>
<head>
<style>
#header {
    background-color:#9999CC;
    color:white;
    text-align:center;
    padding:5px;
}
.dashboard_banner img {
    margin-left: 440px;
}
#nav {
    line-height:30px;
    background-color:#aba1ff;
    height:300px;
    width:100px;
    float:left;
    padding:5px;	      
}

#footer {
    background-color:#9999CC;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
</style>
</head>

<body>
<div class="dashboard_banner">
<?php 
echo $this->Html->image('welcome to online exam.jpg');?>
</div>
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
