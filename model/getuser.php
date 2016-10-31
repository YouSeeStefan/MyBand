<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect('localhost','Stefan','myband','myband_test');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"newsarticles");
$sql="SELECT * FROM newsarticles WHERE title LIKE '".$q."%'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    // echo "<img src=".$row['image']." >" ; 
    // echo $row['title'];
    // echo $row['date_created'];
    // echo $row['content'];
    
    echo "<div class='article'>
    <section>
        <article>
            <div class='content'><br>";
               echo "<img class='img' src='img/".$row['image']."'><br><br>";
               echo "<b style='font-size: 22px;'>".$row['title']."</b><br>";
               echo "<i style='font-size: 10px;'>".$row['date_created']."</i>";
               echo "<p><content>".$row['content']."</content></p>";
          echo  "</div><br>
        </article>
    </section>
</div>";



}
mysqli_close($con);
?>
</body>
</html>