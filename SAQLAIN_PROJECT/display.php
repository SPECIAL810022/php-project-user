<?php 
include 'CONNECTION.php';

$sql = mysqli_query($joint, "SELECT * FROM `practice`");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>display page</title>
 </head>
 <body>

 	<table cellspacing="2" border="1">
        <form >
        	<tr>
        	<th>SL.NO</th>
        	<th>NAME</th>
        	<th>NUMBER</th>
        	<th>EMAIL</th>
        	<th>AGE</th>
        	<th>P_LANGUAGE</th>
        	<th>PASSWORD</th>
        	<th>COURSE</th>
        	<th>LANGUAGE</th>
        	<th>IMAGE</th>
        	<!-- <th>DELETE</th> -->
        	<th>MODIFY</th>
        </tr>

        <?php
           $sl = 0;
           while ($want_fetch = mysqli_fetch_assoc($sql)) {
           	
    
        ?>
        <tr>
        	<td><?php  echo $sl+1; $sl++?></td>

            <!-- <td><?php echo $want_fetch['id'];?></td> -->
        	<td><?php echo $want_fetch['name'];?></td>
        	<td><?php echo $want_fetch['number'];?></td>
        	<td><?php echo $want_fetch['email'];?></td>
        	<td><?php echo $want_fetch['age'];?></td>
        	<td><?php echo $want_fetch['p_language'];?></td>
        	<td><?php echo $want_fetch['password'];?></td>
        	<td><?php echo $want_fetch['course'];?></td>
        	<td><?php echo $want_fetch['language'];?></td>
        	<td><?php echo "<image src='".$want_fetch['image']."' height='100' width='100' " ;?></td>
        		<!-- <td><a href='delete.php?delete=<?php echo $want_fetch['id'] ?>'>delete</td> -->
        			<td><a href='update.php?modify=<?php echo $want_fetch['id'] ?>'>update</td>
        </tr>
<?php } ?>
        </form>
    </table>

    <div align="right"><a href="SIGNUP.PHP">FOR NEW ENTRY</a></div>
 </body>
 </html>