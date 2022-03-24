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
            $Ctype=(isset($_POST["Ctype"])) ? $_POST["Ctype"] : "";

            $res=" SELECT * FROM car WHERE Ctype='$Ctype'";
            $result=mysqli_query($connection,$res);
            echo "<h1><center>".$Ctype."&nbsp;Cars</h1><br><br>";
        ?>
        <center>
        <table border='1'>
            <tr>
                <th>Vehicle ID</th>
                <th>License No</th>
                <th>Model</th>
                <th>Year</th>
                <th>Daily Rate</th>
                <th>Weekly Rate</th>
            </tr>
            <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                            echo "<td>" . $row["Vehicle_id"]= (isset($row["Vehicle_id"])) ? $row["Vehicle_id"] : "" . "</td>";
                            echo "<td>" . $row["License_no"]= (isset($row["License_no"])) ? $row["License_no"] : "" . "</td>";
                            echo "<td>" . $row["Model"]= (isset($row["Model"])) ? $row["Model"] : "" . "</td>";
                            echo "<td>" . $row["Year"]= (isset($row["Year"])) ? $row["Year"] : "" . "</td>";
                            echo "<td>" . $row["Daily_Rate"]= (isset($row["Drate"])) ? $row["Drate"] : "" . "</td>";
                            echo "<td>" . $row["Weekly_Rate"]= (isset($row["Wrate"])) ? $row["Wrate"] : "" . "</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
        <div>
            <input type="button" value="Back " onclick="history.go(-1)" class="back_button btn btn-success btn-block btn-lg gradient-custom-4 text-body" />
        </div>
    </body>
</html>


