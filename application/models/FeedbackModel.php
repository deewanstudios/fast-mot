<?

class FeedbackModel {
	
    
     public function __construct(){
        $db = Database::getInstance();
        $this->connection = $db->getConnection();
    }
        
	 public function feedbackContent(){
	     $id = 7;
    
       try{
           $query = ("SELECT title, context FROM  content WHERE pages_id ='$id'");
        $page = $this->connection->prepare($query);
        $page->execute();
        $pageContent=$page->fetchAll(PDO::FETCH_ASSOC);
        
        return $pageContent;
        
       }catch(PDOException $e){
           echo $e->getMessage();
       }
       
   }
   
    
     public function getImages(){
       $page_id = 7;
          try{
           $query = ("SELECT img_name, img_description, img_path FROM  images WHERE pages_id ='$page_id'");
        $sql = $this->connection->prepare($query);
        $sql->execute();
        $allImages=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $allImages;
        
        // var_dump($allImages);
 }catch(PDOException $e){
            echo $e->getMessage();
            }
            }
     
     

            public function getComments(){

            try{

           
            $query = ("SELECT  * FROM feedback ORDER BY id DESC");
            $sql = $this->connection->prepare($query);
            $sql->execute();
            return $sql->fetchAll();

            }catch(PDOException $e){
            echo $e->getMessage();
            }
            }

            public function insertFeedback($name, $comment){

            $query = 
        ("INSERT INTO feedback(name, feedback, time) VALUES(?, ?, NOW())");
             $data = $this->connection->prepare($query);
             
             // echo $name . $comment;
             
             $data->bindParam(1, $name);
             
             $data->bindParam(2, $comment);
             
             $data->execute();
      
         
         
     }
}




?>