<?php
include ("clsOutils.php");
include ("clsTicker.php");
include ("clsSQL.php");

class clsStock{

	var $content;
	var $result; 
	
	public function getAverage(){
		$cSQL = new clsSQL();
		$cOutils = new clsOutils();
		
		echo "<br>in";
		$result = $cSQL->fetchAverage();
		$recordset = $result->store_result();
		//$row =  $cOutils->getResult($result);
		$nbrColumn = $cOutils->getNbrColumn($recordset);
 
		 
		$tablo = "<TABLE border='1'>";	 		
		$i = 0;
		while ($row = mysqli_fetch_array($recordset)){
			$ligne = "";
		 
			$cSQL->insertMail("'".$row[0]."'");		
			for ($i=0;$i<$nbrColumn;$i+=1){			
				/*if ($i = 1) {
					$ligne .= '<td>http://ichart.finance.yahoo.com/t?s='.$row[$i]."</td>";
				 } 		
				else {
					
				*/	
						
				$ligne .= "<td>".$row[$i]."</td>";
				/*}	*/
						
			}   	
   		$tablo .=   "<tr>".$ligne."</tr>";		
		}				
		$tablo .=  "</table>";		
		
		
		return $tablo  ;
	 
		/*echo "<br/>1 ==>".$avg[0]."<br/>";	
		echo "2 ==>".$avg[1]."<br/>";		
		 */
	}

	
	public function getConnection(){
		$cSQL = new clsSQL();
		$connect = $cSQL->connect();
	}
	
	public function getCount(){
		$cSQL = new clsSQL();
		$cOutils = new clsOutils();
		
		$result = $cSQL->selectCount();
		echo "avant";
		echo $result->field_count;
      $count = $cOutils->getResult($result);
		echo "apres ok";
			
	//	echo "<br/>COUNT ==>".$count[0]."<br/>";	
	//	echo "Derniere ==>".$count[1]."<br/>";		
		 
	}
	
	public function getComboNomCie($debut, $fin){		
		$cSQL = new clsSQL();
		$cOutils = new clsOutils();
		
		$connect = $cSQL->connect(); 		
		$result = $cSQL->selectNomCie($debut, $fin);
		
	   $recordset = $result->store_result();
		$combo = $cOutils->createCombo($recordset,"nomCie");
		return $combo;
	}
	
	public function getMarche($wrss, $name){
	$s = new clsStock();	
	
	$p = $s->getSource($wrss,0,'yfs_l10_','yfs_c10_');	
	$name = strtolower($name);	
	$ligne =  $name.'">';
		
	$q = $s->getSource($p,0,$ligne,'</b></big>'); //		
 
	return  $this->result = $q;	
	}
	
	public function getName($adr, $name){

	$s = new clsStock();
	$wurl = $adr.$name;
	$wrss = $s->getStockSite($wurl);
	
	$ligne = $s->getSource($wrss,0,'http://ichart.finance.yahoo.com/t?s='.$name ,'</a><div id=');
	
	$t = $s->getSource($ligne,0, 'alt="' ,'">');

	$search = array("'");
	$replace = array(" ");
	$r =  str_replace($search, $replace , $t);
	 
	return $r;
}
	
	public function getSommaireQuotidien(){

	$cSQL = new clsSQL();
	$stock = new clsStock;
	
	$connect = $cSQL->connect(); 		
	$cie = $cSQL->selectAbrev();		

	while ($row =mysqli_fetch_array($cie)){ 	
 		 		
		$wurl = 'http://finance.yahoo.com/q?s='.$row[0];	
		$wrss = $stock->getStockSite($wurl);		
		
		$close = $stock->getClose($wrss,$row[0]); 		
		$open = $stock->getOpen($wrss,$row[0]); 		
		$volume = $stock->getVolume($wrss,$row[0]); 			
		
		$requete = "insert into sommaire (close, open, volume, nom )  values ('$close','$open','$volume', '$row[0]')";						 
		$qv = mysql_query($requete);				 							
	}		
}
	
	private function getSource($wrss,$spos,$strDebut,$strFin){
	//Get text
	$text = '';
	try {
		$spos = strpos($wrss,$strDebut,$spos) + strlen($strDebut) ;  	 
		$epos = strpos($wrss,$strFin, $spos);  		
 
		if ($epos>$spos){
		 
			$text = substr($wrss,$spos,$epos-$spos);				
		} 		
		else {
			$text = '-';
		}
	}
	catch (Exception $e){
			$text = 'Pas trouve...';
	}
	
	return $text;
}
	
	private function getStockSite($stockLink){
 
	   if ($fp = fopen($stockLink, 'r')) {
		  $contenu = '';
			
		  while ($line = fread($fp, 1024)) {
			 $contenu .= $line;
		  }
	   }
	  
    return $this->content=$contenu;  
	}	
	public function getTabloDetailByCie($abrev){
	
		if ($abrev){
			$cSQL = new clsSQL();		
			$cOutils = new clsOutils();
			
			$result = $cSQL->selectTabloDetailByCie($abrev);
			$recordset = $result->store_result();
			
			$tablo = $cOutils->feedTablo($recordset);
			return $tablo;	
		}
	}
		
	public function getTabloMain(){
	
		$cSQL = new clsSQL();
		$cOutils = new clsOutils();
		
		$recordset = $cSQL->selectTablo();
		$result = $recordset->store_result();		
		$tablo = $cOutils->feedTablo($result);	
		
		return $tablo;		
	}

	public function getTabloSommaireByCie($abrev){
	
		if ($abrev){
			$cSQL = new clsSQL();		
			$cOutils = new clsOutils();
			
			$result = $cSQL->selectTabloSommaireByCie($abrev);				
			$recordset = $result->store_result();
			
			$tablo = $cOutils->feedTablo($recordset);
			return $tablo;
		}
	}
	
	public function getOpen($wrss, $name){
	$s = new clsStock();	
			
	if (strlen($wrss)>100){         
		$p = $s->getSource($wrss,0,'Open:','</tr>');			
    }	
	$q = $s->getSource($p,0,'tabledata1">','</td>');	
		
	return  $this->result = $q;	
}

	public function getClose($wrss, $name){
	$s = new clsStock();	
			
	if (strlen($wrss)>100){         
		$p = $s->getSource($wrss,0,'Prev Close:','</tr>');	
		$q = $s->getSource($p,0,'tabledata1">','</td>');			
    }
	return  $this->result = $q;	
}

	public function getLastTrade($wrss, $name){
	$s = new clsStock();	
			
	if (strlen($wrss)>100){        
 
		$p = $s->getSource($wrss,0,'Last Trade:','</tr>');	
		
		$q = $s->getSource($p,0,'yfs_l10_','</big></td>');	
		$name = strtolower($name);	
		$ligne =  $name.'">';
				
		$r = $s->getSource($q,0,$ligne,'</span></b>'); //			
    }
	return  $this->result = $r;	
}
	
	public function getVolume($wrss, $name){

	$s = new clsStock();
			
	if (strlen($wrss)>100){        
 
		$p = $s->getSource($wrss,0,'Volume:','</tr>');	
		
		$name = strtolower($name);	
		$ligne =  $name.'">';
		$q = $s->getSource($p,0,$ligne,'</span>'); //	
		$r = str_replace(",","",$q);
    }
	return  $this->result = $r;	
}

	public function InsertNomCieByTicket($abr){
		$s = new clsStock();
		$cSQL = new clsSQL();
		
		$long = $s->getName('http://finance.yahoo.com/q?s=', $abr); 		
		//echo "abrev=".$abr." cie=>".$long;
		
		 $cSQL->insertNomCie($abr, $long);
		  
		return $abr;
	}
	
	public function InsertNomCie($nom){
		$ticker = new Ticker();
		$cStock = new clsStock();
		$o = new clsOutils();
		$cSQL = new clsSQL();
		
		if ($nom == 'g0'){			
			$cie = $ticker->getName();		 
				
			foreach ($cie as &$nom)
			{	
				$nomLong = $cStock->InsertNomCieByTicket($nom);								
				echo "Ajoute au syteme ==> ".$nomLong."<br/>";						
			}				 
		}
		elseif ($nom == 'd0'){		
			
			$cie = $cSQL->selectNomTodo();		 
			while ($row =mysqli_fetch_array($cie)){
				$nomLong = $cStock->InsertNomCieByTicket($row[0]);								
				echo "Ajoute au syteme ==> ".$nomLong."<br/>";						
			}				 
		}
		
		elseif ($nom !== '')
		{					
			$nomLong = $cStock->InsertNomCieByTicket($nom);	
			echo "Ajoute au syteme ==> ".$nomLong."<br/>" ;
		}
	}
	
	public function insertCour(){
	
		$ticker  = new Ticker();
		$cie = $ticker->getName();
		$stock = new clsStock;
		
		foreach ($cie as &$nom)
		{		
			$prix = $stock->processStockSite('http://finance.yahoo.com/q?s=', $nom  ); 		
			
	 		 if ($prix > 0)
			 {						
				$requete = "insert into marche (prix,nom)  values ('$prix', '$nom')";						 
				$qv = mysql_query($requete);				 
			 }						
		}		
	}
	
	public function insertCourAbrev(){
		$cSQL = new clsSQL();
		$stock = new clsStock;
		$o = new clsOutils;

		$connect = $cSQL->connect(); 		
		$cie = $cSQL->selectAbrev();		
	
		while ($row =mysqli_fetch_array($cie)){ 	
			
			//$prix = $stock->processStockSite('http://finance.yahoo.com/q?s=', $row[0]); 		
			$wurl = 'http://finance.yahoo.com/q?s='.$row[0];
			
	
			$wrss = $stock->getStockSite($wurl);	
			
			$prix = $stock->getMarche($wrss, $row[0]);
			$volume = $stock->getVolume($wrss,$row[0]); 		 
			
	 		 if ($prix > 0)
			 {				
				$cSQL->insertMarche($prix, $row[0], $volume);		
				 
				//$requete = "insert into marche (prix,nom,volume)  values ('$prix', '$row[0]', '$volume')";						 
				//$qv = mysql_query($requete);				 
			 }						
		}		
	}
	
	public function processStockSite($adr, $name){
	$s = new clsStock();
	$wurl = $adr.$name;
	$wrss = $s->getStockSite($wurl);
			
	if (strlen($wrss)>100){        
 
		$p = $s->getSource($wrss,0,'yfs_l10_','yfs_c10_');	
		$name = strtolower($name);	
		$ligne =  $name.'">';
				
		$r = $s->getSource($p,0,$ligne,'</b></big>'); //			
    }
	return  $this->result = $r;
}
	
	public function UpdateNomCie(){
		
	}

}
?>