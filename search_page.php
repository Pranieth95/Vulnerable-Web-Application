
<?php
$conn=mysqli_connect("localhost","root","","ciit_db");
$get=$_POST['search'];
if($get){
    $show="select * from ciit_u_details where u_fname='$get'";
    $result=mysqli_query($conn,$show);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    while($rows=mysqli_fetch_array($result)){
        
        echo $rows ['u_lname'];
        echo $rows ['u_gender'];
       
        echo "<br/>";
    }
}
?>