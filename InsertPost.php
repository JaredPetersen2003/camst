<?php
$title = $_POST["title"];
$subtitle = $_POST["subtitle"];
$content = $_POST["content"];
$image = $_FILES['image'];

$imageName = $_FILES["image"]["name"];
$imageTmpName = $_FILES["image"]["tmp_name"];
$imageSize = $_FILES["image"]["size"];
$imageError = $_FILES["image"]["error"];
$imageType = $_FILES["image"]["type"];

$fileExt = explode('.',$imageName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png');

if (in_array($fileActualExt, $allowed)){
   if ($imageError === 0){
       if ($imageSize < 10000000){
            $imageNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = 'img/uploads'.$imageNameNew;
            move_uploaded_file($imageTmpName, $fileDestination);
       }else {
           echo "Your file is too big";
       }
   }else {
       echo "There was an error uploading your file";
   }
}else{
    echo "Incorrect file type. Please only use: .jpg, .jpeg or .png";
}


$db = mysqli_connect("localhost","user", "pass","camst");
$query = "INSERT INTO posts(title, subtitle, content, image_name) VALUES ('$title', '$subtitle','$content', '$imageNameNew')";
mysqli_query($db, $query);

header("location: http://localhost/camst/index.php?uploadsucess");
?>