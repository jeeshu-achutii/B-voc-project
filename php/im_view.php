<html>
<body>
    <?php
  $db=mysqli_connect('localhost','root','','codephp');
  $query=mysqli_query($db,"SELECT * FROM video");
 while($row=mysqli_fetch_array($query))
 {
 echo"
        <tr>
        <td>".$row['id']."</td>
        <td><img src='uploads/".$row[1]."' width='130px' height='100px'</td>
        
        </tr>";
        
 }
 ?>
 </body>
    </html>
	