<html>
    <?php
        // Turn off all error reporting
        //error_reporting(0);
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
    ?>

    <table border="1">
    <tr>
        <td width="40"><b>ID</b></td>
        <td width="80"><b>Date of birth:</b> </td>
        <td width="40"><b>Sex:</b> </td>
        <td width="60"><b>Number of Projects:</b> </td>
    </tr>

    <?PHP
        while ($line = mysqli_fetch_array($res))
        {
            echo "<tr>
                <td align=\"center\">".$line['id']."</td>
                <td align=\"center\">".$line['date_of_birth']."</td>
                <td align=\"center\">".$line['sex']."</td>
                <td align=\"center\">".$line['projects_number']."</td>
            </tr>";
            $id = $line['id'];
            $birthday = $line['date_of_birth'];
            $sex = $line['sex'];
            $pr = $line['projects_number'];
        }
        mysqli_close($db);
    ?>
    </table>

    <h3>Edit desired fields</h3>
        
        <form action="base.php?pg=42" method="POST">
            <table>
                <tr>
                    <td width="150"><b>ID:</b> </td><td width="200"><input type="int" name='id' value="<?PHP echo $id ?>" readonly/></td>
                </tr>

                <tr>
                    <td width="150"><b>Date of birth: <br>(yyyy-mm-dd):</b> </td><td width="200"><input type="text" name="brthd" value="<?PHP echo $birthday ?>"/></td>
                </tr>
                
                <tr>
                    <td width="150"><b>Sex:</b> </td><td width="200"> </td>
                </tr>
                
                <tr>
                    <td width="150"><b><input type="radio" name="sex" value='F' checked = "'<?PHP echo $sex ?>' == 'K' " />Female</b> </td><td width="200"><input type="radio" name="sex" value='M' checked = "'<?PHP echo $sex ?>' == 'M' "/><b>Male</b></td>
                </tr>
                
                <tr>
                    <td width="150"><b>Projects participated:</b> </td><td width="200"><input type="int" name="projects" value="<?PHP echo $pr ?>" /></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Change" /></td>
                </tr>
            </table>
        </form>
 
</html>