<?php
  class GenObj{
	  private $conndet = array("host"=>"localhost", "db"=>"test", "charset"=>"utf8", "u"=>"root", "p"=>"sltc@1234");
	  private $conn=NULL; 
	
	  function connect(){	
		  try{
			  $this->conn = new PDO("mysql:host=". $this->conndet['host']. 
			  ";dbname=". $this->conndet['db']. ";charset=". $this->conndet['charset'], $this->conndet['u'], $this->conndet['p']);
			  //new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
		  }
		  catch (PDOException $e){
			  echo "Connection failed: ". $e->getMessage();
		  }
		  return $this->conn;
	  }
	
	  function closeLink(){
	    $this->conn=NULL;
	  }
  }

?>
