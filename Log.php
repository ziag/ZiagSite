<?php
/*
   
      
      $log = new log();
   	function PDOConnect ($sDSN, $sLogin, $sPassword) {
   
      	try {
      		$oPDO = new PDO($sDSN, $sLogin, $sPassword);
   		} catch(PDOException $e) {
   		
   		die ('Erreur de connexion !');//.$e->getMessage());
   
      	$log->logguer(logException($e));
        	}
  
      	$oPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      return $oPDO;
  
      }
      
    require ('config.inc.php');   
    require ('class.inc.php');
    require ('functions.inc.php');
    
    PDOConnect(DB_DSN, DB_LOGIN, DB_PASSWORD);
      

*/
class Log {
 
//const ERR_LOG_FILE = '/var/log/PHP/erreurs_php.log';
const ERR_LOG_FILE = '/tmp/erreurs_php.log';
 
	public function logguer($msg) {
		$date = date('d/m/Y - H:i:s');
		$log = 'Le ' .$date. ' : ' .$msg. "\n";
		error_log($log, 3, self::ERR_LOG_FILE);
	}

}
?>