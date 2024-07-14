<?php
include 'CONNECTION.PHP';

$update = $_REQUEST['modify'];

$query = mysqli_query($joint,"SELECT * FROM  `practice` WHERE id = '$update'");

$result = mysqli_fetch_assoc($query);

$language = explode(",",$result['language']);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>sign up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style type="text/css">
        
        body{
           background: aqua;
        }
    </style>

</head>
<body>
    <form method="POST" action="update_back.php" enctype="multipart/form-data">
       <center> <table collspadding="2" border="1px" bgcolor="aqua">
            <tr>
                <td>NAME</td>
                <td><input type=text name="name" value="<?php echo $result['name'];?>">
                <input type="text" name="modify" value="<?php echo $update ?>"hidden></td>
            </tr>
            <tr>
                <td>NUMBER</td>
                <td><input type=text name="number" value="<?php echo $result['number'];?>"></td>
            </tr>
            <tr>
                <td>E-MAIL</td>
                <td><input type=text name="mail" value="<?php echo $result['email'];?>"></td>
            </tr>
            <tr>
                <td>AGE</td>
                <td><input type=text name="age" value="<?php echo $result['age'];?>"></td>
            </tr>
            <tr>
                <td>FAV_PROGRAMING LANGUAGE</td>
                <td><input type=text name="program" value="<?php echo $result['p_language'];?>"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type=text name="pass" value="<?php echo $result['password'];?>"></td>
            </tr>

            <tr>
                <td>COURSE</td>
                <td>
                <select name="course">
                    <option value="bca" <?php if($result['course']=='bca') echo "selected='selected'"; ?>>B.C.A</option>
                    <option value="mca" <?php if($result['course']=='mca') echo "selected='selected'"; ?>>M.C.A</option>
                    <option value="b.tech" <?php if($result['course']=='b.tech') echo "selected='selected'"; ?>>B.TECH</option>
                    <option value="m.tech" <?php if($result['course']=='m.tech') echo "selected='selected'"; ?>>M.TECH</option>
                    <option value="diploma" <?php if($result['course']=='diploma') echo "selected='selected'"; ?>>DIPLOMA</option>
                </select></td>
            </tr>

            <tr>
                <td>LANGUAGE</td>
                <td><input type="checkbox" name="lang[]" value="hindi" <?php if(in_array('hindi',$language)){ echo "checked";}?>>HINDI
                <input type="checkbox" name="lang[]" value="english" <?php if (in_array('english', $language)){ echo "checked";}?>>ENGLISH
                <input type="checkbox" name="lang[]" value="bangla" <?php if(in_array('bangla',$language)){ echo "checked";}?>>BANGLA</td>
            </tr>

            <tr>
                <td>IMAGE</td>
                <td><input type="file" name="img" width="100" height="100" required></td>
            </tr>
           <center><tr>
            <td>
                <button type="submit">SUBMIT</button>
                <button type="reset" name="reset">RESET</button>

          </td>  
            </tr>
        </table></center>
    </form>
</body>
</html>