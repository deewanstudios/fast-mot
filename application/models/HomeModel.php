<?
/**
 * HomeMode class
 * This is the class that holds all the methods for retrieving data from the database for the home page
 *
 * @package com.fastmot
 * @author  Deewanstudios Limited
 */
class HomeModel {
	
    // public $page_id=1;
   
    
    public function __construct(){
        $db = Database::getInstance();
        $this->connection = $db->getConnection();
    }
    

   
   public function HomepageContent(){
       
       $id =1;
       
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
       $page_id=1;
          try{
           $query = ("SELECT img_name, img_description, img_path FROM  images WHERE pages_id ='$page_id' AND visibility = 1");
        $sql = $this->connection->prepare($query);
        $sql->execute();
        $allImages=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $allImages;
        
        // var_dump($allImages);
        
       }catch(PDOException $e){
           echo $e->getMessage();
       }
    }
    
}

// END

