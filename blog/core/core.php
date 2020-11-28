<?php

require('core\config.php');

class postWorkDb {
	
	protected $connect;
	public $data = array();
	
	const error = '<h1 class="section__h1">Извините, что-то пошло не так...</h1></article>';
	
	public function __construct() 
	{			
		$dbHost = '127.0.0.1';
		$dbUser = 'blog_base';
		$dbPass = 'blog_base';
		$dbName = 'blog_base';
		
		$this->connect = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
		
		if (!$this->connect) {
			echo self::error;
			return;		
		}
	}
	
	public function __destruct()
	{
		$this->connect->close();
	}
	
	public function getCategory(int $postId)
	{
		$sql = 'SELECT title AS cat_title FROM bl_pages WHERE id = (SELECT cat_id FROM bl_post WHERE id = '.$postId.')';
		
		if (!$postCategoryArr = $this->connect->query($sql)) {
			echo self::error;
			return;
		}
		return $postCategoryArr->fetch_assoc();
	}
	
	public function getPost(int $postId)
	{		
		$sql = 'SELECT * FROM bl_post WHERE id = '.$postId;
		
		if (!$postArr = $this->connect->query($sql)) {
			echo self::error;
			return;
		}

		$resultPostArr = $postArr->fetch_assoc();
		$categoryArr = $this->getCategory($postId);
        $resultPostArr = $resultPostArr + $categoryArr;
	    return  $this->data = $resultPostArr;
	}
	
	public function updateView(int $postId)
	{		
		$sql = 'UPDATE bl_post SET view = view + 1 WHERE id = '.$postId;
		
		if (!$result = $this->connect->query($sql)) {
			echo self::error;
			return;
		}
	}

	public function getAllPost()
	{		
		$sql = 'SELECT * FROM bl_post';
		
		if (!$allPostArr = $this->connect->query($sql)) {
			echo self::error;
			return;
		}

   		return  $this->data = $allPostArr->fetch_all(MYSQLI_ASSOC);
	}	
}



class tplRender {

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

  public function displayTemplate($template) {
    $template = 'inc'.DIRECTORY_SEPARATOR.$template.'.tpl';
    ob_start();
    include ($template);
    echo ob_get_clean();
  }
}

