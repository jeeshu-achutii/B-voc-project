
<?php
ob_start();
 $db=mysqli_connect('localhost','root','','course');

echo $_POST['add'];

if(isset($_POST['add']))
{

	$parth1=pathinfo($_FILES['file_upload']['name']);
	echo $ext1=$parth1['extension'];
	echo $radvideo1=rand().date("Y-M-d-H-i-s").".".$ext1;
	
	echo $sql="insert into download(documents)values('$radvideo1')";
	
	if($ext1== "pdf" and $ext1=="png" and $ext1=="jpg" and $ext1=="mp4")
	{
	 echo "File not Supported";
	}
	else
	{
	move_uploaded_file($_FILES['file_upload']['tmp_name'],'uploads/'.$radvideo1);	
	mysqli_query($db,$sql);	
	}
	
	header("Location:pdf_view.php");
}
?>