<html>
    <?php
        // Turn off all error reporting
        //error_reporting(0);
    ?>
    <h3> Statistics </h3>

    <?PHP 
        $db = mysqli_connect("127.0.0.1:3306", "empro", "", "empro") or die ("Unable to connect to the database");
        
        if(db) echo "Succesfully connected to the database<br>";

        $inp = "SELECT * FROM members";

        $res = mysqli_query($db, $inp);
    ?>

    <p><b>Members:</b></p>

    <table border="1">
        <tr>
            <td width="40"><b>ID</b></td>
            <td width="90"><b>Name:</b> </td>
            <td width="120"><b>Surname</b> </td>
            <td width="80"><b>Date of birth:</b> </td>
            <td width="40"><b>Sex:</b> </td>
            <td width="60"><b>Number of Projects:</b> </td>
        </tr>

        <?PHP
            while ($line = mysqli_fetch_array($res))
            {
                echo "<tr>
                    <td align=\"center\">".$line['id']."</td> 
                    <td align=\"left\">".$line['name']."</td>
                    <td align=\"left\">".$line['surname']."</td>
                    <td align=\"center\">".$line['date_of_birth']."</td>
                    <td align=\"center\">".$line['sex']."</td>
                    <td align=\"center\">".$line['projects_number']."</td>
                    </tr>";
            }
            mysqli_close($db);
        ?>
    </table>
</html>