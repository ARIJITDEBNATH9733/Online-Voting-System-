<?php

          $ip=$_SERVER['REMOTE_ADDR'];

          $d=date("Y/m/d");

          $time_now=mktime(date('h')+5,date('i')+30,date('s'));

          $t=date('h:i:s A',$time_now);

                     $n=$_POST['nm'];
                     $e=$_POST['em'];
                     $m=$_POST['msg'];
                     $p=$_POST['ph'];

		     $con = mysqli_connect("localhost","root","","vote");
                     if ($n=="" || $e==""   || $p==""  || $m=="" )
                        {
                             echo "Go Back , essential data have not been provided by you. !";
                             goto en;
                        }
                    else
                         {
                             $sql="INSERT INTO contact VALUES ('$n','$e','$m','$p','$d','$t','$ip')";
                             mysqli_query($con,$sql);
                             echo 'Received your message ! Thank you.';
                             header("Location: http://localhost/vote");
                      
			     echo '<BR> <h3></h3>';
							 
                             mysqli_close($con);
                         }
                     en:
                
?>

