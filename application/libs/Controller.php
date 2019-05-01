<?

class Controller{
	// public $model = null;
    
    // function __construct(){
//         
        // $this->loadModel($model);
    // }
	
	public function loadModel($model){
		
		require_once '../application/models/' . $model . '.php';
		// $this->model ;
		return new $model();
				
	}
	
}

?>