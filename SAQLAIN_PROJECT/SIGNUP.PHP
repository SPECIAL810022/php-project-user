<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>sign up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script>
        function hwh() {
            
           
            var asif = document.getElementById('box').value;


          if (asif == "") {
               
               document.getElementById('res').innerHTML="please enter your password here";
               document.getElementById('res').style.color="red";
               return false;
          }
           if (asif.leangth<10) {
               
               document.getElementById('res').innerHTML="ENETER 10 DIGIT PASSWORD HERE";
               document.getElementById('res').style.color="red";
               return false;
          }
          if (asif.search(/[a-z]/)== -1) {
               
               document.getElementById('res').innerHTML="ATLEAST ONE LOWER CASES INPUT REQUIRED";
               document.getElementById('res').style.color="red";
               return false;
          }
          if (asif.search(/[A-Z]/) ==-1) {
               
               document.getElementById('res').innerHTML="ATLEAST ONE UPPER CASES INPUT REQUIRED";
               document.getElementById('res').style.color="red";
               return false;
          }
          if (asif.search(/[0-9]/) ==-1) {
               
               document.getElementById('res').innerHTML="ATLEAST ONE NUMARIC VALUE";
               document.getElementById('res').style.color="red";
               return false;
          }
           if ((asif.search(/[$]/)== -1) && (asif.search(/[@]/)== -1) && (asif.search(/[#]/)== -1) && (asif.search(/[!]/)== -1)){
               
               document.getElementById('res').innerHTML="ATLEAST ONE SPECIAL CHARACTOR VALUE";
               document.getElementById('res').style.color="red";
               return false;
          }
           if ((asif.charAt(0)!=9) && (asif.charAt(0)!=8) && (asif.charAt(0)!=7)){
               
               document.getElementById('res').innerHTML="PLEASE START WITH 9,8,7";
               document.getElementById('res').style.color="red";
               return false;
          }
          else{
            document.getElementById('res').innerHTML="successfull";
            document.getElementById('res').innerHTML="green";
          }
                
            
        }
    </script>
    <style type="text/css">
        
        body{
           background: lightgreen;
        }
    </style>

</head> 
<body>
    <form method="POST" onsubmit="return hwh()" action="SIGNUP_BACK.PHP" enctype="multipart/form-data">
       <center> <table collspadding="2" border="1px" bgcolor="aqua">
            <tr>
                <td>NAME</td>
                <td><input type=text name="name" required=""></td>
            </tr>
            <tr>
                <td>NUMBER</td>
                <td><input type=text name="number" required=""></td>
            </tr>
            <tr>
                <td>E-MAIL</td>
                <td><input type=text name="mail" required=""></td>
            </tr>
            <tr>
                <td>AGE</td>
                <td><input type=text name="age" required=""></td>
            </tr>
            <tr>
                <td>FAV_PROGRAMING LANGUAGE</td>
                <td><input type=text name="program" required=""></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type=text name="pass" id="box"><span id="res"></span></td>
            </tr>

            <tr>
                <td>COURSE</td>
                <td>
                <select name="course" required="">
                    <option value="bca">B.C.A</option>
                    <option value="mca">M.C.A</option>
                    <option value="b.tech">B.TECH</option>
                    <option value="m.tech">M.TECH</option>
                    <option value="diploma">DIPLOMA</option>
                </select></td>
            </tr>

            <tr>
                <td>LANGUAGE</td>
                <td><input type="checkbox" name="lang[]" value="hindi">HINDI
                <input type="checkbox" name="lang[]" value="english" required>ENGLISH
                <input type="checkbox" name="lang[]" value="bangla">BANGLA</td>
            </tr>

            <tr>
                <td>IMAGE</td>
                <td><input type="file" name="img" width="100" height="100" required=""></td>
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