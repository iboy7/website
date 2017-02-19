<html>
    <body>
        <h3>Dodawanie studenta</h3>
        
        <form action="index.php?pg=31" method="POST">
            <table>
                <tr>
                    <td width="150"><b>Name:</b> </td><td width="200"><input type="text" name="name" /></td>
                </tr>
                
                <tr>
                    <td width="150"><b>Surname:</b> </td><td width="200"><input type="text" name="surname" /></td>
                </tr>
                
                <tr>
                    <td width="150"><b>Date of birth: <br>(yyyy-mm-dd):</b> </td><td width="200"><input type="text" name="brthd" /></td>
                </tr>
                
                <tr>
                    <td width="150"><b>Sex:</b> </td><td width="200"> </td>
                </tr>
                
                <tr>
                    <td width="150"><b><input type="radio" name="sex" value='F' />Female</b> </td><td width="200"><input type="radio" name="sex" value='M' /><b>Male</b></td>
                </tr>
                
                <tr>
                    <td width="150"><b>Projects participated:</b> </td><td width="200"><input type="int" name="projects" /></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Dodaj" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>