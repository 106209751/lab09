<?php 
    require_once "settings.php";
    $dbconn = @mysqli_connect($host,$user,$pwd,$sql_db);
    if($dbconn) {
        $query = "SELECT * FROM cars";
        $result = mysqli_query($dbconn, $query);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<table border='1' cellpadding='5'>";
                echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";
                echo "<tr>";
                echo "<td>" . $row['car_id'] . "</td>";
                echo "<td>" . $row['make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['yom'] . "</td>";
                echo "</tr>";
                echo "</table>";
                }
            }
        } else {
        echo "There are no cars to display.";
    }
?>