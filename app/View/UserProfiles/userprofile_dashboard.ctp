<!DOCTYPE html>
<html>
<p align=center><?php 
echo $this->Html->image('online-exam-940x196.jpg',array('height'=>'130px'));?> </p>
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

<body>
<div id="nav1">

<?php $c=0;
	 foreach ($categories as $key=>$value):$c++; ?>
	<tr>
		<td><?php echo $c; ?>&nbsp;</td>
		<td><?php echo $this->Html->link($value,array('controller'=>'category_questions','action'=>'list_questions',$key),array('confirm'=>'Are you sure you want to start the test ?')); ?>&nbsp;</td>
		<br/>
	</tr>
<?php endforeach; ?>
</div>

<div id="sec">
                                                   
Instructions:<br />
                            
  1.Total no. of questions :10<br />
  2.Timeings :5minutes<br />
  3.Each questions carries one mark<br />
  4.No negative mark
</div>
</body>
</html>
