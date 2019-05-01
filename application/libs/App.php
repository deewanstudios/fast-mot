<?

class App {
	
	
	protected $controller = 'home';
	
	protected $method = 'index';
	
	protected $params = array();
	

	public function __construct() {
		
		$url = $this->parseUrl();
		
		// print_r($url);
		
		if(file_exists('../application/controllers/'.$url[0]. '.php')){
			
			$this->controller = $url[0];
			unset($url[0]);
			
		}
		
		require_once '../application/controllers/' .$this->controller . '.php';
		
		$this->controller = new  $this->controller;
		
		if(isset($url[1])){
			
			if(method_exists($this->controller, $url[1])){
				
				$this->method = $url[1];
				
				unset($url[1]);
				
			}
		}
		
		
		$this->params = $url ? array_values($url) : array();
		
		call_user_func_array(array($this->controller, $this->method), $this->params);
			
		// print_r($this->params);
		
		
	
	}
	
	
	protected function parseUrl(){
		
		if(isset($_GET['url'])){
			
			 // echo ($_GET['url']);
			
			$url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
			return $url;
			echo "<pre>";
			var_dump($url);
            echo "</pre>";
			
		}
		
	}

}
?>