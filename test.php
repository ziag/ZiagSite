<?php

include_once("clsStock.php");
include_once("Log.php");

	
	function lire ($obj){
		$obj = new Log(); 
		$obj->logguer("Simon");
	}
	
		 $ticker = new Ticker();
		 $cStock = new clsStock();
		 $o = new clsOutils();
		
			
		$cie = $ticker->getName();
		
		$string= $o->trim_value($cie);
		echo $string;
		
		echo "<br>";
		
//		echo $o->trim_value($cie);
		
	//	echo $o->fetchCountRowTable("ticker");					
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>test</title>
   <!--
   <link href="style/style.css" rel="stylesheet" type="text/css" />
   -->
   
</script>
</head>

<body>



<form action="clean.php" method="post">
 <div id="haut">
    <?php
    // On inclut le haut de la page
   // include("haut.php");
    ?>
</div>
 
<div id="menu">
<?php
// Puis on inclut le menu
include("menu.php");
?>
</div>
 
 
<?php
// Maintenant on met le code de notre page (ce qu'on veut)
// Ce code peut bien entendu contenir du PHP comme du HTML
?>
 
 
<div class="question">
    Mais pourquoi tous les sites web se mettent au PHP ? Que peut-on faire avec ?<br />
    Et pis, c'est quoi PHP ???
</div>
 
<p>Hola hola, pas de panique amis Zér0s, ce tutoriel est là pour tout vous expliquer :o)...</p>

 
 <?php

	 
 	
 ?>
 
</form>

</body>  
 