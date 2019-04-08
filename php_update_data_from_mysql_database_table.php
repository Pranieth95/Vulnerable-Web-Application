<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
   
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "ciit_db";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $id = $_POST['id'];
   $fname = $_POST['fname'];
   
    echo $id; 
    echo $fname;       
   // mysql query to Update data
   $query = "UPDATE `ciit_login` SET u_name ="."'$fname'"."'WHERE u_pass="."'$id'";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="php_update_data_from_mysql_database_table.php" method="post">

            ID To Update: <input type="text" name="id" required><br><br>

            New First Name:<input type="text" name="fname" required><br><br>

            

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>