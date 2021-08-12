
<?php
ob_start();
 $db=mysqli_connect('localhost','root','','codephp');

echo $_POST['submit'];

if(isset($_POST['submit']))
{

	$parth1=pathinfo($_FILES['file_upload']['name']);
	echo $ext1=$parth1['extension'];
	echo $radvideo1=rand().date("Y-M-d-H-i-s").".".$ext1;
	
	echo $sql="insert into video(video1)values('$radvideo1')";
	
	if($ext1== "pdf" and $ext1=="png" and $ext1=="jpg" and $ext1=="mp4")
	{
	 echo "File not Supported";
	}
	else
	{
	move_uploaded_file($_FILES['file_upload']['tmp_name'],'uploads/'.$radvideo1);	
	mysqli_query($db,$sql);	
	}
	
	header("Location:pdf.php");
}
?>