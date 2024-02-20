<?php
   $nm=$_POST["vote"];
    $c=1;
       $conn = mysqli_connect("localhost", "root", "", "vote");
       $sql="update vresult set vcount=vcount+1 where cand='$nm'";
       mysqli_query($conn, $sql);
       echo "Record Added";
	   mysqli_close($conn);
	   header("Location: http://localhost/vote");
  
?>