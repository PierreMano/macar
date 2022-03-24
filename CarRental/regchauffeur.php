<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <link href="phpstyles.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
<center>
<?php
$database_host = "localhost";
$database_user = "herve";
$database_pass = "machumu13";
$database_name = "car_rental";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
#check the value of the input odify the process
    $fname = (isset($_POST["fname"])) ? $_POST["fname"] : "";
    $lname = (isset($_POST["lname"])) ? $_POST["lname"]: "";
    $age = (isset($_POST["age"])) ? $_POST["age"]:"";
    $mobile = (isset($_POST["mobile"])) ? $_POST["mobile"]:"";
    $dlno = (isset($_POST["dlno"])) ? $_POST["dlno"]: "";
    if($fname==""){
        echo "<h3>Sorry register a customer first</h3><br><br>";
    }
    else {
        $result = "INSERT INTO chauffeur(Fname,Lname,AGE,Mobile,Dno) VALUES ('$fname','$lname','$age','$mobile','$dlno')";
        mysqli_query($connection, $result) or die(mysqli_error($connection));
        echo "<h4>this is the name</h4>" . $fname ." name";
        echo "<h3>New chauffeur has been successfully added</h3><br><br>";
    }
?>
<input type="button" value="Next" onclick="location='chauffeur.html'" class="back_button btn btn-success btn-block btn-lg gradient-custom-4 text-body" />
</center>
</body>
</html>
