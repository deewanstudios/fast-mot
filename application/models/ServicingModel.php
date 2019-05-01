<?
/**
 * ServicingModel class
 * This is the class that holds all the methods for retrieving data from the database for the servcing page
 *
 * @package com.fastmot.website.servicing.page.model
 * @author  Deewanstudios Limited
 */
class ServicingModel {
   // private $id =3;
    // public $page_id=1;
   
    
    public function __construct(){
        $db = Database::getInstance();
        $this->connection = $db->getConnection();
        
    }
    

   
   public function HomepageContent(){
       
       $id =3;
       
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
       $page_id=3;
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
     
     
     
      public function servicesInfo(){
       // $page_id=3;
          try{
           $query = ("SELECT *  FROM  servicetype");
        $sql = $this->connection->prepare($query);
        $sql->execute();
        $allImages=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $allImages;
        
        // var_dump($allImages);
        
       }catch(PDOException $e){
           echo $e->getMessage();
       }
    }
      
      
       public function basicChecked(){
       $id=1;
          try{
           $query = ("SELECT *  FROM  checklist where servicetype_id = '$id'");
        $sql = $this->connection->prepare($query);
        $sql->execute();
        $allImages=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $allImages;
        
        // var_dump($allImages);
        
       }catch(PDOException $e){
           echo $e->getMessage();
       }
    }
       
       
          public function basicReplaced(){
       $id=1;
          try{
           $query = ("SELECT *  FROM  replaceditems where servicetype_id = '$id'");
        $sql = $this->connection->prepare($query);
        $sql->execute();
        $allImages=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $allImages;
        
        // var_dump($allImages);
        
       }catch(PDOException $e){
           echo $e->getMessage();
       }
    }
          
          
          public function fullChecked(){
       $id=2;
          try{
           $query = ("SELECT *  FROM  checklist where servicetype_id = '$id'");
        $sql = $this->connection->prepare($query);
        $sql->execute();
        $allImages=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $allImages;
        
        // var_dump($allImages);
        
       }catch(PDOException $e){
           echo $e->getMessage();
       }
    }
       
       
          public function fullReplaced(){
       $id=2;
          try{
           $query = ("SELECT *  FROM  replaceditems where servicetype_id = '$id'");
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

