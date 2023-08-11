<?php
if(isset($_POST['submit'])){
 $Name= $_REQUEST['Name'];
 $Email= $_REQUEST['Email'];


$file=$_FILES['file'];

$name= $file['name'];
$tmp_name=$file['tmp_name'];
$loc="uplod/".$name;
move_uploaded_file($tmp_name,$loc);
 $servername="localhost";
 $username="root";
 $pass="";
 $db="info";
 $conn=mysqli_connect($servername,$username,$pass,$db);
 $sql="INSERT INTO tableinfo (ID, Name, EMAIL, Picture) 
        VALUES (NULL, '$Name', '$Email', '$loc ');";
  $sqlqerry=mysqli_query($conn,$sql);
 if($sqlqerry){
  header("location:imge.php");
 }
}


?>

