<?php

include ("clsStock.php");
 
$stock = new clsStock;		
$stock->getConnection();	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Historique</title>
   <!--
   <link href="style/style.css" rel="stylesheet" type="text/css" />
   -->
<script language="JavaScript"></script>
</head>

<body>
<form action="historique.php" method="post">


	
   <div id="main">
   <input type="submit" value="OK" id="ok">
    
		
<?php
		$depart = time();
		echo $depart;
		echo $stock->getCount();
				
	 echo $stock->getComboNomCie(0.02, 5);

	
		if (isset($_POST['nomCie'])){						

			 echo $stock->getTabloDetailByCie($_POST['nomCie']);			 
			 echo "<br/>";
			 echo $stock->getTabloSommaireByCie($_POST['nomCie']);		
			 echo "<br/>";
			 
				 					
		}
		
		 	
		echo "<br/>";	
		echo $stock->getTabloMain();		

		echo time()-$depart." seconde(s) <br/>"; 
	 	/* 		*/	
?>     
    </div>
</form>
</body>  
