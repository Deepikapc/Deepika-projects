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
<div id="nav"><p align=center> 
<?php echo $this->Html->image('images11.jpg',array('height'=>'130px','width'=>'400px'));?> </p>

<table>
<tbody>
	<?php $i=0; foreach ($final as $result): $i++;?>
	//debug($results);  
	<tr>
		<td><?php echo $i; ?>&nbsp;</td>
		<td>
			<?php echo $result['name']; ?>
		</td>
		<td>
			<?php echo (($result['score']/$result['count'])*100); ?>%</td>
		
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>