<?php


include "clsStock.php";
//include "clsOutils.php";


$stock = new clsStock;	
$outils = new clsOutils;	
 

?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>email</title>
   <!--
   <link href="style/style.css" rel="stylesheet" type="text/css" />
   -->
<script language="JavaScript"></script>
</head>

<body>
<form action="historique.php" method="post">

<?php

 	$t =  'Allo'; //$stock->getAverage();
 	$outils->setEmail($t);

?>

</div>
</form>
</body> 