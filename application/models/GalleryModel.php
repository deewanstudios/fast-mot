<?

class GalleryModel {
    
    public function __construct(){
        $db = Database::getInstance();
        $this->connection = $db->getConnection();
    }
	
    
	public function getImages(){
       $page_id=6;
       $use ="gallery";
          try{
           $query = ("SELECT * FROM  images WHERE pages_id ='$page_id' AND purpose ='$use' AND visibility = 1");
        $sql = $this->connection->prepare($query);
        $sql->execute();
        $galleryImages=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        return $galleryImages;
   
       }catch(PDOException $e){
           echo $e->getMessage();
       }
    }
}


?>