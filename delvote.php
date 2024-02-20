<?php
   $i=$_POST["id"];
   $p=$_POST["pw"];
   $c=0;
      $conn = mysqli_connect("localhost", "root", "", "vote");
	$sql="select *from adm where id='$i' and pword='$p'";
    $result=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_array($result))
     {
       $c=$c+1;}
    if($c==1)
	{
       $sql="update vresult set vcount=0";
       mysqli_query($conn, $sql);
       echo "Record Refreshed";
	}
	else
	{
		echo "Illegal User";
	}
	   mysqli_close($conn);
	   header("Location: http://localhost/vote");
  
?>