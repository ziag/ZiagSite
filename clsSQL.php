<?php
 
class clsSQL {
	
	public function connect(){	
      $connection = mysql_connect("localhost","simon","g43ll3");      
		if ( ! $connection )
		die ("connexion impossible"); 		
		$mabasededonnee="stock";
		
		return mysql_select_db($mabasededonnee) or die ("pas de connexion"); 				
	}
	
	public function fetchAverage(){
		$cOutils = new clsOutils();		
		$result = $cOutils->callSP("sp_FetchAverage");
		return $result;
	}

	public function fetchCountRowTable($table){
		$cOutils = new clsOutils();		
		$result = $cOutils->callSP("sp_FetchCountRowTable()");
		return $result;
	}

	public function insertNomCie($abr, $long){
		$cOutils = new clsOutils();	
		$sp = "sp_insertIntoTicker('".$abr."', '".$long."')";
		$result = $cOutils->callSP($sp); 				
		 						
 		return $result;		
	}
	
	public function insertMail($abr){
		$cOutils = new clsOutils();		 
		$sp = "sp_Imail(".$abr.")";
		$result = $cOutils->callSP($sp); 				
		
 		return $result;		
	}
		
	public function insertMarche($abr, $prix, $volume){
		$cOutils = new clsOutils();	
		$sp = "sp_InsertMarche('".$abr."', '".$prix."','".$volume."')";
		$result = $cOutils->callSP($sp); 				
		 						
 		return $result;		
	}

	public function nettoyage(){
		$cOutils = new clsOutils();
		try {
			$cie = $cOutils->callSP("sp_Nettoyage");
			$cie = $cOutils->callSP("sp_IMarcheHist");
			$cie = $cOutils->callSP("sp_Dmarche");
		}
		catch (Exception $e){
			$text = 'Pas trouve...';
		}
		}
		
	public function selectCount(){
		$cOutils = new clsOutils();	
		$text = 'clsOutils';
		try {
			$result = $cOutils->callSP("sp_fetchCount"); 		
					 $text = 'selectCount ok...';
 			return $result;
 			
 			}
		catch (Exception $e){
			$text = 'selectCount err...';
		}
	}
	
	public function selectNomCie($debut, $fin){
		$cOutils = new clsOutils();
		$sp=  "sp_FetchNomCie(".$debut.", ".$fin.")";
		$result = $cOutils->callSP($sp); 
	
		return $result;		
	}
	
	public function selectTablo(){
		$cOutils = new clsOutils();
		$result = $cOutils->callSP("sp_FetchStock"); 
		
		return $result;		
	}	
	public function selectTabloDetailByCie($abrev){	
		
 		 if ($abrev) {	 
			$cOutils = new clsOutils();
			$sp=  "sp_FetchDetailByCie('".$abrev."')";
			$result = $cOutils->callSP($sp); 				
		}
		
		return $result;		
	}
	
	public function selectTabloSommaireByCie($abrev){
		
 		 if ($abrev) {	 
			$cOutils = new clsOutils();
			$sp=  "sp_FetchSommaireByCie('".$abrev."')";
			$result = $cOutils->callSP($sp); 				
		}
								
		return $result;		
	}	
	public function selectAbrev(){
	
		$cOutils = new clsOutils();
		$cie = $cOutils->callSP("sp_FetchCieByPrix");
		$result = $cie->store_result(); 
		return $result;		
	}
	
	public function selectNomTodo(){
		
		$cOutils = new clsOutils();
		$cie = $cOutils->callSP("sp_FetchNomTodo");
		$result = $cie->store_result(); 
		return $result;		
	}
	
}
?>