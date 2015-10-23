<?php
	include("clsStock.php");

	$cStock = new clsStock();	 
	$cStock->getConnection();

	//if (isset($_POST['abrev'])){		
	//	$cStock->InsertNomCie($_POST['abrev']);		
	//	$_POST['abrev'] = "d0";
	//}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Nom Cie</title>
   <!--
   <link href="style/style.css" rel="stylesheet" type="text/css" />
   -->
   <script language="JavaScript">
	
		var time = null
		function move() 
		{
	 		window.location = 'http://localhost/Stock/nomcie.php';
		}

</script>
</head>

<body>



<form action="nomcie.php" method="post">

 
 <p>Abrev : <input type="text" name="abrev" id="abrev" value="d0" /></p>
 <p><input type="submit" value="OK" id="ok"></p>
 
 
 <?php
 echo $stock->getComboNomCie(0.02, 5);
 ?>

 
</form>

</body>  