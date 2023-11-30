<?php 
$name=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];
$cheminDB="uploads/images/$name";
move_uploaded_file($tmp,$cheminDB);
// print_r($_FILES);
// exit();
extract($_POST);
$cnx=mysqli_connect("localhost",'root','','ecole');
mysqli_query($cnx,"insert into etudiant(nom,prenom,photo,class,tel,email) values('$nom','$prenom','$cheminDB','$class','$tel','$email')");
mysqli_close($cnx);
header("location:create.php");
?>