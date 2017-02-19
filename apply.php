<html>
    <?php
        // Turn off all error reporting
        //error_reporting(0);
    ?>
    <h3> Adding Procedure </h3>

    <?PHP 

        $db = mysqli_connect("localhost", "empro", "", "empro") or die ("Unable to connect to the database");
        
        if($db) echo "Succesfully connected to the database<br>";

        function receivePOST($var)
        {
             return htmlspecialchars($_POST[$var]);
        }

        $id = receivePOST("id");
        $brthd = receivePOST("brthd");
        $sex = receivePOST("sex");
        $projects = receivePOST("projects");
   
        $inp = "UPDATE members SET                      
                     date_of_birth = '$brthd',
                     sex = '$sex',
                     projects_number = '$projects' 
                     WHERE id='$id'";

        //echo "$inp";
        $res = mysqli_query($db, $inp);
            
        if($res)
        {
            echo("Changes saved");
        }
        else
        {
            echo("Changes unsaved!");
        }


        mysqli_close($db);
    ?>
</html>