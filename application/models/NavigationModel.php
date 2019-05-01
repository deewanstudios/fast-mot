<?
/**
 * NavigationModel class
 * This is the class that holds all the methods for retrieving data from the database for the website linksS page
 *
 * @package com.fastmot.Navigation
 * @author  Deewanstudios Limited
 */
class NavigationModel {
   
  
    
    public function __construct(){
        $db = Database::getInstance();
        $this->connection = $db->getConnection();
        
    }
    
    
     
   public function getLinks(){
       
       try{
           $query = ("SELECT id, name FROM  pages");
        $navigation = $this->connection->prepare($query);
        $navigation->execute();
        $links=$navigation->fetchAll(PDO::FETCH_ASSOC);
        
        return $links;
        
       }catch(PDOException $e){
           echo $e->getMessage();
       }
            
      
        
    }
   
   
   public function getActiveLink(){
       $active;
       try{  
           if (isset($_SERVER["REQUEST_URI"])){
               $page = URL_DOMAIN.$_SERVER["REQUEST_URI"];
               $cpage = explode("/", filter_var(rtrim($page, "/"), FILTER_SANITIZE_URL));
               $active = 1;
               $aquery = ("SELECT name FROM pages WHERE id = '$active'");
           }
        $anavigation = $this->connection->prepare($aquery);
        $anavigation->execute();
        $alinks=$anavigation->fetchAll(PDO::FETCH_ASSOC);
        
        return $alinks;
        
       }catch(PDOException $e){
           echo $e->getMessage();
       }
            
      
        
    }
   
   
   
    
}

// END

$nav = new NavigationModel(); 

$navy = $nav->getLinks();

$aPage = $nav->getActiveLink();

// 
    // if(isset($_GET['page'])){
        // $selectedPage = $_GET['page'];
        // echo "<pre>";
        // var_dump($selectedPage);
        // echo "</pre>";
    // }


    

?>