<?php
 
	class POST
	{	
		private $conn;
		
		public function __construct()
		{
			$database = new Database();
			$db = $database->dbConnection();
			$this->conn = $db;
	  }
		
		public function runQuery($sql)
		{
			$stmt = $this->conn->prepare($sql);
			return $stmt;
		}
    
    public function store_image($product_name, $description, $price, $img_name)
    {
      $errorsInsertingSef = array();
      if(empty($post_content))
      {
          $errorsInsertingSef[] = "Please write something.";
          return;
      }
      if($isimage == 1)
      {
        $post_content = ' class="post_image" src="./upload/'.$post_content.'" alt="Image"></center>';
        $contains = 'img';
      }
  
      else
      {
        $post_content = "<span style='color: red;'>Error! This image/video is either deleted or was not uploaded succesful. Try uploading again</span>";
      }
      
      if(count($errorsInsertingSef)== 0)
      {
        $date_posted = date("Y-m-d h:i:s");
        $date_modified = date("Y-m-d h:i:s");
        $poster_id = $_SESSION['user_session'];
        try
        {
          $stmt = $this->conn ->prepare("INSERT INTO post_table(poster_id, post_content, contains, date_posted, date_modified)       
          VALUES(:poster_id, :post_content, :contains, :date_posted, :date_modified)");                  
          $stmt->bindparam(":poster_id", $poster_id);
          $stmt->bindparam(":post_content", $post_content); 
          $stmt->bindparam(":contains", $contains);
          $stmt->bindparam(":date_posted", $date_posted); 
          $stmt->bindparam(":date_modified", $date_modified);             
          if($stmt->execute())
          {
            return true;
          } 
        }
        catch(PDOException $e)
        {
          echo $e->getMessage();
        }
      }
      else
      {
        return $errorsInsertingSef;
      }
    }
	}
?>