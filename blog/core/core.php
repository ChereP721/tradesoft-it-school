<?php

require('core\config.php');

class postWorkDb {
	
	protected $connect;
	public $data = array();
	
	const error = '<h1 class="section__h1">Извините, что-то пошло не так...</h1></article>';
	
	public function __construct() 
	{			
		$db_host = '127.0.0.1';
		$db_user = 'blog_base';
		$db_pass = 'blog_base';
		$db_name = 'blog_base';
		
		$this->connect = new mysqli($db_host, $db_user, $db_pass, $db_name);
		
		if (!$this->connect) {
			echo self::error;
			return;		
		};	
	}
	
	public function __destruct()
	{
		$this->connect->close();
	}
	
	public function getCategory(int $id)
	{
		$sql = 'SELECT title AS cat_title FROM bl_pages WHERE id = (SELECT cat_id FROM bl_post WHERE id = '.$id.')';
		
		if (!$result = $this->connect->query($sql)) {
			echo self::error;
			return;
		};		
		return $result->fetch_assoc();
	}
	
	public function getPost(int $id)
	{		
		$sql = 'SELECT * FROM bl_post WHERE id = '.$id;
		
		if (!$result = $this->connect->query($sql)) {
			echo self::error;
			return;
		};		
		$res = $result->fetch_assoc();
		
		$re1 = $this->getCategory($id);
		
		$res = $res + $re1;
				
	    return  $this->data = $res;		
	}
	
	public function updateView(int $id)
	{		
		$sql = 'UPDATE bl_post SET view = view + 1 WHERE id = '.$id;
		
		if (!$result = $this->connect->query($sql)) {
			echo self::error;
			return;
		};
	}

	public function getAllpost()
	{		
		$sql = 'SELECT * FROM bl_post';
		
		if (!$result = $this->connect->query($sql)) {
			echo self::error;
			return;
		};
		return  $this->data = $result;		
	}	
}



class Render {

  private $data = array();

  public function __construct() {
    
  }
  
  public function __get($name) {
    if (isset($this->data[$name])) return $this->data[$name];
    return;
  }

  public function set($name, $value) {
    $this->data[$name] = $value;
  }

  public function delete($name) {
    unset($this->data[$name]);
  }

  public function display($template) {
    $template = 'inc'.DIRECTORY_SEPARATOR.$template.'.tpl';
    ob_start();
    include ($template);
    echo ob_get_clean();
  }
};

?>