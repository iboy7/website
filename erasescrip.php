<html>
    <?php
        // Turn off all error reporting
        //error_reporting(0);
        //127.0.0.1:3306
    ?>
    <h3> Editing Procedure </h3>

    <?PHP 

        $db = mysqli_connect("localhost", "empro", "", "empro") or die ("Unable to connect to the database");
        
        if($db) echo "Succesfully connected to the database<br>";

        function receivePOST($var)
        {
             return htmlspecialchars($_POST[$var]);
        }

        $name = receivePOST("name");
        $surname = receivePOST("surname");
        
        if (!strlen($name) || !strlen($surname) )
        {
            echo "ERROR: Not all expected values have been entered!";
            exit();
        }

        $quer = "SELECT * FROM members where name='$name' and surname='$surname' ";

        $res = mysqli_query($db, $quer);

        if ($res->num_rows == 0)
        {
            echo "There is no such member!";
            exit();
        }


        while ($line = mysqli_fetch_array($res))
        {
            $id = $line['id'];
        }

        $quer2 = "DELETE FROM members WHERE id='$id'";
        $res2 = mysqli_query($db, $quer2);

        if ($res2)
        {
            echo "Member deleted";
        }
        else
        {
            echo "Unable to delete a member";
        }
        mysqli_close($db);
    ?>
    </table>
</html>