<?php
    $con=mysqli_connect("127.0.0.1:56552","azure","6#vWHD_$","comp1006");
    $result = mysqli_query($con,"SELECT * FROM songs");         
    echo "<table class=\"table\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Favorite song</th>
                </tr>                
            </thead>
            <tbody>";
    while($row = mysqli_fetch_array($result))
    {

        echo "<tr>";
        echo "<td scope=\"row\">" . $row['id'] . "</td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['lname'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['song'] . "</td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    mysqli_close($con);
?>