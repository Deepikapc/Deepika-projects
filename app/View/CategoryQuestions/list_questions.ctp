<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div class="categories index">
	<h2><?php echo $this->Form->create('Cat',array('url'=>array('controller'=>'test_results', 'action'=>'result'))); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<p align=top>
	<?php echo $this->Html->image('images8.jpg',array('width'=>'350px'))?>
	
	</thead>
	<tbody>
	<?php echo $this->Form->hidden('cat_id',array('value'=>$category_questions[0]['CategoryQuestion']['category_id'])); ?>
	<?php echo $this->Form->create('TestResult', array('url'=>array('controller'=>'test_results', 'action'=>'result'))); ?>
	<?php $c=0; foreach ($category_questions as $key=>$value):$c++; ?>
	<tr>
		<td><?php echo $c; ?>&nbsp;</td>
		<td><?php echo $value['CategoryQuestion']['question']; ?>&nbsp;</td>
		<td>
		   <div style="float:left;margin-left:-895px;margin-top:26px;">
		   
		   <?php echo $this->Form->input($value['CategoryQuestion']['id'],array('legend'=>false,'type'=>'radio','div'=>true,'options'=>array('option1'=>$value['CategoryQuestion']['option1'],'option2'=>$value['CategoryQuestion']['option2'],'option3'=>$value['CategoryQuestion']['option3'],'option4'=>$value['CategoryQuestion']['option4'])));?>&nbsp;
		  </div>
		</td>	
</tr>
<?php endforeach; ?>
    </tbody>
	</table>
	<?php echo $this->Form->submit('Submit',array('class'=>'from_jquery')); ?>
</div>
<div class="fortimer"></div>
<script type="text/javascript">
var hourstart = 00;
var minstart = 5;
var secstart = 30;
var testing = setInterval(function() {
if(minstart == '0' && secstart == '0'){
clearInterval(testing);
alert('!!!Sorry Time Over');
$('.from_jquery').click();
}

if(secstart == '0'){
hourstart = 0;
minstart--;
secstart = 59;
}
if(minstart >=0){
var hourstart1 = hourstart;
var minstart1 = minstart;
var secstart1=secstart;

if(hourstart1 < 10){
hourstart1='0'+hourstart1;
}
if(minstart1 < 10){
minstart1='0'+minstart1;
}
if(secstart1 < 10){
secstart1='0'+secstart1;
}
$('.fortimer').text(hourstart1+':'+minstart1+':'+secstart1);
}else{
$('.fortimer').text('0:0:0');
}

secstart--;


}, 1000);
</script>
