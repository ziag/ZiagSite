<?php
include ("clsStock.php");
$stock = new clsStock;		
$stock->getConnection();
$outils = new clsOutils;

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>shStock</title>
   <!--
   <link href="style/style.css" rel="stylesheet" type="text/css" />
   -->
   <script language="JavaScript">
	
		var time = null
		function move() 
		{
	 		window.location = 'http://localhost/Stock/stock.php';
		}

</script>
</head>

<!-- <body onload="timer=setTimeout('move()',60000 * 15)">-->
<body>
<form action="stock.php" method="post">

<!--1 minute = 60 000 millisecondes-->
<body>


	
   <div id="main">
 
    
		
<?php
  echo "ALLO ";
  
 

	echo date("H:i",time()+(24*60*60)); 
	echo "<br/>";



	$depart = time();
		 
 
	echo $stock->insertCour();				   	
 
	echo $stock->insertCourAbrev();				   	
	/* echo $stock->getCount();
 
	$t =  $stock->getAverage();
	$outils->setEmail($t);

	
	if ($t !== '' ) {
		echo $t;	
		$outils->setEmail($t);
	}
	else {
		echo "Rien ";
		$outils->setEmail("RIEN");
	}
 */
	echo "apres stock";

 	
	
	echo time()-$depart." seconde(s) <br/>"; 	
 
?>
	  <input type="submit" value="Go" id="ok">
    </div>


</form>
</body>   