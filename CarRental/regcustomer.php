<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <link href="phpstyles.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
<?php
    $database_host = "localhost";
    $database_user = "herve";
    $database_pass = "machumu13";
    $database_name = "car_rental";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
    $Fname = (isset($_POST["fname"])) ? $_POST["fname"] : "" ;
    $Lname = (isset($_POST["lname"])) ? $_POST["lname"]: "";
    $AGE = (isset($_POST["age"])) ? $_POST["age"]:"";
    $Mobile = (isset($_POST["mobile"])) ?$_POST["mobile"]: "";
    $Dlno = (isset($_POST["dlno"])) ?$_POST["dlno"]: "";
    $Insno = (isset($_POST["ino"])) ?$_POST["ino"]: "";
    if($Fname=" "){
        echo "<h3>Sorry register a customer first</h3><br><br>";
    }
    else {
        $result = "INSERT INTO customer(Fname,Lname,AGE,Mobile,Dno,Vehicle_id) VALUES('$Fname','$Lname','$AGE','$Mobile','$Dlno','$Insno')";
        mysqli_query($connection, $result) or die(mysqli_error($connection));
        echo "<h3>New customer has been successfully added</h3><br><br>";
    }
?>
<?php	
	$result1="SELECT Cid FROM customer WHERE Dno='$Dlno'";
	$result2=mysqli_query($connection,$result1);
	while($row = mysqli_fetch_assoc($result2))
{
	echo "<h3>Customer ID is :</h3>".$row["Cid"];
}
?>
    <input type="button" value="Next" onclick="location='customer.html'" class="back_button btn btn-success btn-block btn-lg gradient-custom-4 text-body" />
</body>

</html>
