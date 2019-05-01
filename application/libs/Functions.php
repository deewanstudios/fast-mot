<?php

/**
 *
 */
class Functions {

    public function __construct() {
        $db = Database::getInstance();
        $this -> connection = $db -> getConnection();
    }

    public function getImages($page_id) {

        try {
            $query = ("SELECT image_name, image_description, image_path FROM  images WHERE pages_id ='$page_id'");
            $sql = $this -> connection -> prepare($query);
            $sql -> execute();
            $allImages = $sql -> fetchAll(PDO::FETCH_ASSOC);

            return $allImages;

        } catch(PDOException $e) {
            echo $e -> getMessage();
        }
    }
    
    
    public function getPageInfo($id){
        
        try{
             $query = ("SELECT title, description, keywords from pages where id = '$id'");
        $head = $this -> connection ->prepare($query);
        $head->execute();
        $meta=$head->fetchAll(PDO::FETCH_ASSOC);
        return $meta;
        }catch(PDOException $e){
            echo $e -> getMessage();
            
        }
            
       
        
    }

    // public function safe_input($data) {
// 
        // $data = trim($data);
        // $data = stripslashes($data);
        // $data = htmlspecialchars($data);
        // $data = htmlentities($data);
        // $data = addslashes($data);
        // return $data;
    // }

}
