<?php
include ("/var/www/Stock/PHPMailer_v5.0.0/class.phpmailer.php");


class clsOutils{

	public function createCombo($recordset, $id){

		$combo = '<select name="'.$id.'"><option value=""></option>';		
		
		while ($row =mysqli_fetch_array($recordset)) {						 	
			$combo .= '<option value="'.$row[0].'">'.$row[1].'</option>';			
		}
		$combo .= '</select>';

		return $combo;
	}
	
	public function callSP($spName){
			
		$mysqli = new MySQLI("localhost","root","g43ll3huard", "stock", 3306);      
		$storedProc = "CALL ".$spName;		
		$mysqli->real_query($storedProc);				
				
		return $mysqli;
	}
	
	public function fetchCountRowTable($nomTable){
		$cSQL = new clsSQL();
		$cOutils = new clsOutils();
		
		$result = $cSQL->fetchCountRowTable($nomTable);
		$count =  $cOutils->getResult($result);
			
		echo "<br/>COUNT ==>".$count[0]."<br/>";			 
	}
	
	public function getResult($mysqli){	
		
		if ($mysqli->field_count) {
echo "in";			
			$result = $mysqli->store_result();
			$row = $result->fetch_row();	
			$result->close();
			
		}		
		if (!$row) {
			echo 'Erreur requete: '.mysql_error();
		exit;		
		}
		return $row;
		 
	}

	public function feedTablo($result){	
 
	$cOutils = new clsOutils;
		
		$nbrColumn = $cOutils->getNbrColumn($result);
		$tablo = "<TABLE border='1'>";	 		
		$i = 0;
		while ($row =mysqli_fetch_array($result)){
			$ligne = "";
			for ($i=0;$i<$nbrColumn;$i+=1){					
				$ligne .= "<td>".$row[$i]."</td>";			
			}   	
   		$tablo .=   "<tr>".$ligne."</tr>";		
		}				
		$tablo .=  "</table>";		
		
		return $tablo  ;
	}
	
	public function getNbrColumn($recordset){
				
		if (!$recordset){
			$nbr = 0;
			echo 'Could not run query: '. mysql_error();
		}
		else{
			$nbr  = $recordset->field_count;	
		}    
	
	return $nbr;
	}
	
	public function setEmail($texte){  
		$mail=new PHPMailer();
		$mail->IsSMTP(); // send via SMTP
		
		//IsSMTP(); // send via SMTP
		$mail->SMTPAuth = true; // turn on SMTP authentication
		
		$mail->Username = "simonubuntu@gmail.com"; // SMTP username
		$mail->Password = "g43ll3huard"; // SMTP password
		$webmaster_email = "simonubuntu@gmail.com"; //Reply to this email ID
		$email="ziag@yahoo.com"; // Recipients email ID
		$name="Simon"; // Recipient's name
		$mail->From = $webmaster_email;
		$mail->FromName = "Simon";
		$mail->AddAddress($email,$name);
		$mail->AddReplyTo($webmaster_email,"Webmaster");
		$mail->WordWrap = 50; // set word wrap
		//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
		//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
		$mail->IsHTML(true); // send as HTML
		$mail->Subject = "Stock==>".strlen($texte);
		$mail->Body = $texte; // "Hi,This is the HTML BODY "; //HTML Body
		 
		$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
		$mail->Port       = 465;
		   
		$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
		if(!$mail->Send())
		{
		  echo "Mailer Error: " . $mail->ErrorInfo;
		}
		else
		{
		  echo "Message has been sent";
		}
	}
	public function trim_value($tablo)
	{
		$chaine = "";
		foreach ($tablo as &$value){ 		
   		$apres = trim($value);
		
		//$apres = strpos(" ","",$value);			 			
		//	$apres = strpos(" ","",$value);			 			
		
		$chaine .= '","'.$apres;
 		//$chaine .= '.TO","'.$apres;
			
		//$chaine .= $apres;	
    	}
    	return $chaine;
	}

	public function trimArray($tablo){
		
		var_dump($tablo);
		array_walk($tablo, 'trim_value');
		
		return var_dump($tablo);	
	}
}
?>