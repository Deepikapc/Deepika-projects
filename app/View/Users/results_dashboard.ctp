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
<p align=center>
<?php echo $this->Html->image('images11.jpg',array('height'=>'130px','width'=>'400px'));?> </p>
<table>
<tbody>
	
	<thead>
	<tr>
	<th>Id</th>
	<th>categoryname</th>
	<th>username</th>
	<th>score</th>
	</tr>
	</thead>
			<?php $i=0; foreach ($final as $final): $i++;?> 
		<td>
		<?php echo $i; ?></td>
		<td>
		<?php echo $final['name']; ?>
		</td>
		<td>
		<?php echo $final['user']; ?>
		</td>
		<td>
			<?php $per= ($final['score']/$final['count'])*100; 
			      echo $per.' '.'%' ;?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>