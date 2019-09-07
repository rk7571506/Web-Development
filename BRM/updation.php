<?php
$size=sizeof($_POST);
$records=$size/4;
for($i=1;$i<=$records;$i++)
{
	$index1="bookid".$i;
	$bookid[$i]=$_POST[$index1];
	
	$index1="title".$i;
	$title[$i]=$_POST[$index1];
	
	$index1="price".$i;
	$price[$i]=$_POST[$index1];
	
	$index1="author".$i;
	$author[$i]=$_POST[$index1];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
for($i=1;$i<$records;$i++)
{
	$q="update book 
	SET title='$title[$i]',price=$price[$i],author='$author[$i]'
	where bookid=$bookid[$i]";
	mysqli_query($con,$q);
}
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Updation.</title>
    </head>
    <body>
        <h1>Book Record Management.</h1>
        <p>
        <?php
            echo $size." Records Updated.";
            ?>
        </p>
        GO Back To Home Page.<a href="home.php">Click Here</a>
    </body>
</html>