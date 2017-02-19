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

        $name = receivePOST("name");
        $surname = receivePOST("surname");
        $brthd = receivePOST("brthd");
        $sex = receivePOST("sex");
        $projects = receivePOST("projects");
        
        if (!strlen($name) || !strlen($surname) || !strlen($brthd) || !strlen($sex) || !strlen($projects))
        {
            echo "ERROR: Not all expected values have been entered!";
        }
        else
        {
            echo "Received submitted data!<br/><br/>";
            echo "name: $name<br/><br/>";
            echo "surname: $surname<br/><br/>";
            echo "brthd: $brthd<br/><br/>";
            echo "sex: $sex<br/><br/>";
            echo "projects: $projects<br/><br/>";
            
            $inp = "INSERT INTO members (name, surname, date_of_birth, sex, projects_number) VALUES ('$name', '$surname', '$brthd', '$sex', '$projects')";

            $res = mysqli_query($db, $inp);
            
            if($res)
            {
                echo("Adding successfull");
            }
            else
            {
                echo("Adding failed");
            }

        }

        mysqli_close($db);
    ?>
</html>