<?php
include ("clsStock.php");
$stock = new clsStock;		
$stock->getConnection();

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Sommaire Quotidien</title>
   <!--
   <link href="style/style.css" rel="stylesheet" type="text/css" />
   -->
   <script type="text/javascript" src="Javascript/Commun.js"></script>

</head>

<!--<body onload=this.timer=setTimeout("move('http://localhost/Stock/')",2000)>-->
<body>
<form action="SommaireQuotidien.php" method="post" >
<!-- 
1 minute = 60 000 millisecondes
<body>
-->

	
	<div id="main">
 	
<?php
	echo date("H:i",time()+(24*60*60)); 
	
	$depart = time();
		 
 
	echo $stock->getSommaireQuotidien();				   	
 
	
	echo " <br/>";
	echo time()-$depart." seconde(s) <br/>"; 	
?>
	  <input type="submit" value="Go" id="ok" >
    </div>
</form>
</body>   