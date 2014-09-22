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

<body>

<div id="header1">

<p>online examination </p>

<?php 
echo $this->Html->image('welcome to online exam.png');?>

<div id="nav1">
<p align=left>
<?php echo $this->Html->link("1.Users",'/users/index/',array('escape'=>false)).'<br />' ?>
<?php echo $this->Html->link("2.Categories",'/categories/index/',array('escape'=>false)).'<br />'  ?>
<?php echo $this->Html->link("3.Category Questions",'/category_questions/index/',array('escape'=>false)).'<br />'  ?>
<?php echo $this->Html->link("4.Results",'/test_results/index/',array('escape'=>false)).'<br />'  ?>
</p>
</div>

<div id="footer">
</div>                                                                      
</body>
</html>
