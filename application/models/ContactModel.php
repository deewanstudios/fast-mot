<?

	/**
	 * 
	 */
	class ContactModel {
	   
	    
	     public function __construct(){
        $db = Database::getInstance();
        $this->connection = $db->getConnection();
    }
	    
		
		     public function insert($name, $surname, $email, $tel, $moreInfo){

            $query = 
            ("INSERT INTO contact(firstname, surname, email, tel, content, time) VALUES(?, ?, ?, ?, ?, NOW())");
             $data = $this->connection->prepare($query);
             
             // echo $name . $comment;
             
             $data->bindParam(1, $name);
             
             $data->bindParam(2, $surname);
             
             $data->bindParam(3, $email);
             
             $data->bindParam(4, $tel);
             
             $data->bindParam(5, $moreInfo);
             
             $data->execute();
      
         
         
     }
	
    
    
    }
	

?>