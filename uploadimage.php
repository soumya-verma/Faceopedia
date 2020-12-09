<?php
$conn = mysqli_connect("localhost", "root", "");
$sql2="USE faces";
if(!mysqli_query($conn,$sql2))
{
	include 'createtable.php';
	$conn = mysqli_connect("localhost", "root", "");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}
}
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$label=$_POST['label'];
	$dob=$_POST['dob'];
	$prof=$_POST['prof'];
	$detail=$_POST['detail'];
	$info=$_POST['info'];

	$file=$_FILES['file'];

	$filename=$_FILES['file']['name'];
	$filetmpname=$_FILES['file']['tmp_name'];
	$fileerror=$_FILES['file']['error'];
	$filetype=$_FILES['file']['type'];
	$filedestination="xx";

	$fileext=explode('.',$filename);
	$fileactualext=strtolower(end($fileext));

	$allowed=array('jpg','jpeg','png');

	if(in_array($fileactualext,$allowed)){
		if($fileerror===0){
			$filedestination="images/".$filename;
			move_uploaded_file($filetmpname,$filedestination);
			$sql2="insert into celebrities (image,label,name,dob,profession,detail,info) values ('$filedestination','$label','$name','$dob','$prof','$detail','$info')";
			if(mysqli_query($conn,$sql2)){
			    echo "data inserted successfully";
			    header("location:page.php");
			}
			else{
			    echo "".mysqli_error($conn);
			}
		}
		else{
			echo "Error uploading your file!".mysqli_error($conn);
		}
	}
	else{
		echo "You cannot upload files of this type!";
	}

}
mysqli_close($conn);
?>