<?php
include_once 'dbconnect.php';

// fetch files
$sql="select * from video order by id desc";
$result = mysqli_query($con, $sql);
?>


<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>
<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                       
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><a href="uploads/<?php echo $row['video1']; ?>" target="_blank">View</a></td>
                    <td><a href="uploads/<?php echo $row['video1']; ?>" download>Download</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
</body>
</html>