
<?php
//include_once("clsSQL.php");
 include ("clsStock.php");
 
 		$cSQL = new clsSQL();
 		$cSQL->nettoyage();
 		
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Nettoyage</title>
   <!--
   <link href="style/style.css" rel="stylesheet" type="text/css" />
   -->
   
</script>
</head>

<body>



<form action="clean.php" method="post">
 <p></p>Note : <input type="text" name="abrev" id="abrev" width="100%" />
 <p></p><input type="submit" value="OK" id="ok">
 
 <?php
 	
 	
 ?>
 
</form>

</body>  