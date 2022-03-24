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
            $res="SELECT * FROM car_rental.chauffeur";
            $result=mysqli_query($connection,$res);
            echo "<h1><center>Drivers</h1><br><br>";
        ?>
        <center>
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>FName</th>
                <th>Lname</th>
                <th>Age</th>
                <th>Mobile</th>
                <th>Dl No.</th>

            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row["Chid"]= (isset($row["Chid"])) ? $row["Chid"] : "" . "</td>";
                    echo "<td>" . $row["Fname"]= (isset($row["Fname"])) ? $row["Fname"] : "" . "</td>";
                    echo "<td>" . $row["Lname"]= (isset($row["Lname"])) ? $row["Lname"] : "" . "</td>";
                    echo "<td>" . $row["Age"]= (isset($row["AGE"])) ? $row["AGE"] : "" . "</td>";
                    echo "<td>" . $row["Mobile"]= (isset($row["Mobile"])) ? $row["Mobile"] : "" . "</td>";
                    echo "<td>" . $row["Dlno"]= (isset($row["Dno"])) ? $row["Dno"] : "" . "</td>";

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


