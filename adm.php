<!DOCTYPE html>
<html lang="en">
<head>
 <style>
 h4{
   font-size: 5em;
   font-family: serif;
   color:#008000;
   text-align: center;
   animation: animate 1.5s linear infinite;
   
 } 
 @keyframes animate{
   0%{
     opacity: 0;
   }
   50%{
     opacity: 0.7;
   }
   100%{
     opacity: 0;
   }
 }
 </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Admin cpanel</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.html">Log out</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Admin Control panel</h1>
      <div class="row center">
        <h5 class="header col s12 light">Shows Results</h5>
      </div>
     <?php
		 $i=$_POST['id'];
		 $ps=$_POST['pwd'];
		 $s="localhost"; $u="root"; $p=""; $db="vote";
 			$conn=mysqli_connect($s,$u,$p,$db);
 		$sql="select *from adm where id='$i' and pword='$ps'";
		$result=mysqli_query($conn,$sql);
  		$c=0;
 		while($row=mysqli_fetch_array($result))
  		{
   		  $c=$c+1;
  		}
		if($c==1)
		{  //------------
         $sql="select *from vresult";
		$result=mysqli_query($conn,$sql);
  		$c=0;
		echo"<table><tr><th>Candidate</th><th>Vote</th></tr>";
 		while($row=mysqli_fetch_array($result))
  		{
   		  echo "<tr><td>".$row['cand']."</td><td>".$row['vcount']."</td></tr>";
  		}
		echo"</table>";
             //-------------------
		}
		else
		  echo "<center><h4>illegal user</h4></center>";

		?>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Admin Panel</h5>
          <p class="grey-text text-lighten-4">Admin Page</p>


        </div>
    
       
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
