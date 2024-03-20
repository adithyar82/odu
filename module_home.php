<?php
require_once("connect_db_remodeled.php");
if(isset($_POST['search']))
{

 $search_val=$_POST['search_term'];
	
 $sql ="SELECT * from add_modules where MATCH(title,description) AGAINST('$search_val')";
 $result = $conn->query($sql);
 if($result->num_rows>0){
 while($row=$result->fetch_assoc())
 {
  echo "<li><a href='index.php".$row['status']."'><span class='title'>".$row['title']."</span><br><span class='desc'>".$row['module_id']."</span></a></li>";
 }
 exit();
}
}
?>
