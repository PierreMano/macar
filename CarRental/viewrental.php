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

            $res2="SELECT Rid,Cid,Vehicle_id,Ctype,Rtype,Sdate,Nodays,Noweeks FROM rental";
            $result2 = mysqli_query($connection,$res2);
            echo "<h1>Active & Scheduled Rentals</h1><br><br>";
        ?>
        <table border='1'>
            <tr>
                <th>RID</th>
                <th>Customer ID</th>
                <th>Vehicle id</th>
                <th>Car type</th>
                <th>Rent type</th>
                <th>Start Date</th>
                <th>No of days</th>
                <th>No of weeks</th>
            </tr>
            <?php
            if (mysqli_num_rows($result2) > 0) {
                while($row2 = mysqli_fetch_assoc($result2))
                {
                    echo "<tr>";
                        echo "<td>" . $row2["Rid"]= (isset($row2["Rid"])) ? $row2["Rid"] : "" . "</td>";
                        echo "<td>" . $row2["Cid"] =(isset($row2["Cid"])) ? $row2["Cid"] : "" . "</td>";
                        echo "<td>" . $row2["Vehicle_id"]= (isset($row2["Vehicle_id"])) ? $row2["Vehicle_id"] : "" . "</td>";
                        echo "<td>" . $row2["Ctype"]= (isset($row2["Ctype"])) ? $row2["Ctype"] : "" . "</td>";
                        echo "<td>" . $row2["Rtype"]= (isset($row2["Rtype"])) ? $row2["Rtype"] : "" . "</td>";
                        echo "<td>" . $row2["Sdate"]= (isset($row2["Sdate"])) ? $row2["Sdate"] : "" . "</td>";
                        echo "<td>" . $row2["Nodays"]= (isset($row2["Nodays"])) ? $row2["Nodays"] : "" . "</td>";
                        echo "<td>" . $row2["Noweeks"]= (isset($row2["Noweeks"])) ? $row2["Noweeks"] : "" . "</td>";
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