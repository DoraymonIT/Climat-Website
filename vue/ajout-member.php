<?php require_once 'database_connect.php';
if(isset($_POST['submit'])){
// Valid file extensions
$extensions_arr = array("jpg", "jpeg", "png", "gif");
$imgName = $_FILES['image-bla']['name'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["image-bla"]["name"]);
// Select file type
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check extension
if (in_array($imageFileType, $extensions_arr)) {

   $name = $_POST['nom'];
   $job = $_POST['job'];
   $description = $_POST['description'];
   // Convert to base64 
   $image_base64 = base64_encode(file_get_contents($_FILES['image-bla']['tmp_name']));
   $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;

   $sql = $base->query('INSERT INTO peoples (nom,description,image,job)VALUES ("' . $name . '","' . $description . '","' . $image . '","' . $job . '")');
   $newname =  $name . "." . $imageFileType;
   move_uploaded_file($_FILES['image-bla']['tmp_name'], $target_dir . $newname);
}


var_dump($_FILES['image-bla']);
header('location:equipe-admin.php');}
?>