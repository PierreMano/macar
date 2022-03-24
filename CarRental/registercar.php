<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<?php
    $database_host = "localhost";
    $database_user = "herve";
    $database_pass = "machumu13";
    $database_name = "car_rental";
	$connection = mysqli_connect($database_host, $database_user, $database_pass, $database_name);
	if(mysqli_connect_errno()){
		die("Failed connecting to MySQL database. Invalid credentials" . mysqli_connect_error(). "(" .mysqli_connect_errno(). ")" ); }
    $License_no=(isset($_POST["lno"])) ? $_POST["lno"] :"";
    $Model=(isset($_POST["model"])) ? $_POST["model"]: "";
    $Year=(isset($_POST["year"])) ? $_POST["year"] : "";
    $Ctype=(isset($_POST["Ctype"]))? $_POST["Ctype"]: "";
    $Name1=(isset($_POST["Carown"])) ? $_POST["Carown"] : "";
    $Ssn=(isset($_POST["uid"])) ? $_POST["uid"] : "";
    $Bid=(isset($_POST["uid"])) ? $_POST["uid"] : "";
    $Compid=(isset($_POST["uid"])) ? $_POST["uid"] : "";
    $Name=(isset($_POST["oname"])) ? $_POST["oname"] : "";
    $Bname=(isset($_POST["oname"])) ? $_POST["oname"] : "";
    $Cname=(isset($_POST["oname"])) ? $_POST["oname"] : "";
    $City=(isset($_POST["city"])) ? $_POST["city"] : "";

	$result="INSERT INTO car(License_no,Model,Year,Ctype) VALUES('$License_no','$Model','$Year','$Ctype')";
	mysqli_query($connection,$result) or die(mysqli_error($connection));
	echo "<h3>New car has been successfully added</h3>";

	if($Name1=="Individual") {
	    $result="INSERT INTO individual(Ssn,Name,City) VALUES('$Ssn','$Name','$City')";
	}
	else if($Name1=="Bank") {
	    $result="INSERT INTO bank(Bid,Bname,City) VALUES('$Bid','$Bname','$City')";
	}
	else {
	    $result="INSERT INTO company(Compid,Cname,City) VALUES('$Compid','$Cname','$City')";
	}
    mysqli_query($connection,$result) or die(mysqli_error($connection));
    echo "<h3>New owner has been successfully added</h3>";

?>
<?php

    if($Ctype == "Compact"){
       echo $Ctype;
        $result= "INSERT INTO car(Drate,Wrate) SELECT (Drate,Wrate) from rates where Ctype= '".$Ctype ."'";
    }
    elseif ($Ctype== "Medium") {
        echo $Ctype;
        $result = "INSERT INTO car(Drate,Wrate) SELECT (Drate,Wrate) from rates where Ctype= '" . $Ctype . "'";
    }
    elseif ($Ctype == "Large"){
        echo $Ctype;
        $result= "INSERT INTO car(Drate,Wrate) SELECT (Drate,Wrate) from rates where Ctype= '".$Ctype ."'";
    }
    elseif ($Ctype == "SUV"){
        echo $Ctype;
        $result= "INSERT INTO car(Drate,Wrate) SELECT (Drate,Wrate) from rates where Ctype= '".$Ctype ."'";
    }
    elseif ($Ctype == "Van") {
        echo $Ctype;
        $result = "INSERT INTO car(Drate,Wrate) SELECT (Drate,Wrate) from rates where Ctype= '" . $Ctype . "'";
    }
    else{
        echo $Ctype;
        return $Ctype;
    }
    mysqli_query($connection,$result) or die(mysqli_error($connection));
    echo "<h3>New owner has been successfully added</h3>";
?>
<?php
	$res="SELECT Vehicle_id from car where License_no='$License_no'";
	$result2=mysqli_query($connection,$res);
	while($row1 = mysqli_fetch_assoc($result2)) {
	echo "<h3>Vehicle ID is :</h3>".$row1["Vehicle_id"];
	$Vehicle_id=$row1["Vehicle_id"];	}
	
	if($Name1=="Individual") {
		$res1="SELECT Owner_id from individual where Ssn='$Ssn'";
		$result3=mysqli_query($connection,$res1);
		while($row2 = mysqli_fetch_assoc($result3)) {
			echo "<h3>Owner ID is :</h3>".$row2["Owner_id"]; 
		$Owner_id=$row2["Owner_id"];}
	}
	else if($Name1=="Bank") {
		$res1="SELECT Owner_id from bank where Bid='$Bid'";
		$result3=mysqli_query($connection,$res1);
		while($row2 = mysqli_fetch_assoc($result3)) {
			echo "<h3>Vehicle ID is :</h3>".$row2["Owner_id"]; 
			$Owner_id=$row2["Owner_id"];}
	}
	else {
	$res1="SELECT Owner_id from company where Compid='$Compid'";
		$result3=mysqli_query($connection,$res1);
		while($row2 = mysqli_fetch_assoc($result3)) {
			echo "<h3>Vehicle ID is :</h3>".$row2["Owner_id"]; 
			$Owner_id=$row2["Owner_id"];}
	}
	
	$result1="INSERT INTO owns(Vehicle_id,Owner_id,Ctype) VALUES('$Vehicle_id','$Owner_id','$Ctype')";
	mysqli_query($connection,$result1) or die(mysqli_error($connection));
?>
</body>
</html>
