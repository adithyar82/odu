<?php
require_once("../loadEnvironmentals.php");
//session_start();
$_SESSION["module"] = 0;
$pmpid = $_SESSION["pmp_id"];
if (!$_SESSION["loggedin"]) {
	header("Location:../index.php");
}
include("../connect_db_remodeled.php");
$id = $_REQUEST['id'];
// header("Location: test.php?id=".$id);
echo'<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow">
<title>Inline editor replacing a textarea</title>
<script src="https://cdn.ckeditor.com/4.15.0/standard-all/ckeditor.js"></script>
<title>Conflict Resolution</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.5">
<script src="./js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
<link rel="stylesheet" type="text/css" href="../style/patientData.css">
<link rel="stylesheet" type="text/css" href="../style/content-styles.css">
<link rel="stylesheet" type="text/css" href="style/styleModule.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../ckeditor/contents.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head>';
if(isset($_POST['submit']))
{
   $content = $_POST['editor2'];
//    echo $content;
   $module_id = 40;
   echo $module_id;
   $sql = "INSERT INTO edit_modules (module_id, module_content) VALUES ('$module_id', '$content');";
   $result = $conn->query($sql);
   if($result->num_rows>=0){
      echo '<script>
        setTimeout(function () { 
            swal({
              title: "Modules",
              text: "Updated Successfully ",
              type: "success",
              confirmButtonText: "OK"
            },
            function(isConfirm){
              if (isConfirm) {
                window.location.href = "edit_modules.php";
              }
            }); }, 1000);
        </script>';
    
   }
   // echo $sql;
   // echo $result;
//    $sql_1 = "SELECT * FROM edit_modules WHERE module_id = '$module_id';";
//    $result_1 = $conn->query($sql_1);
   
}
else if(isset($_POST['submit_1'])){
  $content = $_POST['editor1'];
  $module_name_1 = $_POST['module'];
  $module_name = $_POST['module_name'];
    
    $sql = "SELECT * FROM add_modules WHERE module_content = '$module_name';";
    $result = $conn->query($sql);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $status = $row['module_id'];
      }
    }
    $sql_1 = "SELECT * FROM modules_home ORDER BY module_id DESC LIMIT 1;";
    
    $result_1 = $conn->query($sql_1);
    if($result_1->num_rows>0){
      while($row=$result_1->fetch_assoc()){
        $module_id  = $row['module_id'];
        $module_id = $module_id + 1;
      }
      $sql_21 = "SELECT * FROM modules_home ORDER BY id DESC LIMIT 1;";
      $result_21 = $conn->query($sql_21);
      if($result_21->num_rows>0){
        while($row=$result_21->fetch_assoc()){
          $id  = $row['id'];
          $id = $id + 1;
        }
      }
      $module = "Module "  .$id.  " : "  .$module_name_1. "";
      
      $sql_12 = "INSERT INTO edit_modules (module_id, module_content) VALUES ('$module_id', '$content');";
      echo $sql_12;

      $sql_2 = "INSERT INTO modules_home (id, title, module_id, created_by, status, logo) VALUES (Null, '$module', '$module_id', '555','$status','https://pngimage.net/wp-content/uploads/2018/05/blue-header-design-png-2-300x200.png');";
      $result_2 = $conn->query($sql_2);
     
      $result_12 = $conn->query($sql_12);
      if($result_12->num_rows>=0){
        header("Location: edit_modules.php?id=18");
      
      }
          
    }

  
  
  echo '<script>
          setTimeout(function () { 
              swal({
                title: "Modules",
                text: "Updated Successfully ",
                type: "success",
                confirmButtonText: "OK"
              },
              function(isConfirm){
                if (isConfirm) {
                  window.location.href = "edit_modules.php?id=18";
                }
              }); }, 1000);
  </script>';
  // header("Location: test.php?id=".$id);
}
else if($_POST['submit_2']){
  $module_name = $_POST['module'];
  $sql_1 = "SELECT * FROM add_modules ORDER BY module_id DESC LIMIT 1;";
  $result_1 = $conn->query($sql_1);
  if($result_1->num_rows>0){
    while($row=$result_1->fetch_assoc()){
      $module_id  = $row['module_id'];
      $module_id = $module_id + 1;
    }
  }
  echo $module_id;
  $sql_12 = "INSERT INTO add_modules(id, module_id, module_content) VALUES (Null, '$module_id', '$module_name');";
  $result_12 = $conn->query($sql_12);
  echo $sql_12;
  echo '<script>
          setTimeout(function () { 
              swal({
                title: "Modules",
                text: "Updated Successfully ",
                type: "success",
                confirmButtonText: "OK"
              },
              function(isConfirm){
                if (isConfirm) {
                  window.location.href = "edit_modules.php?id=18";
                }
              }); }, 1000);
  </script>';

}
header("Location: edit_modules.php?id=18");
?>