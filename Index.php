<?php
   session_start();
?>
// The xmlns attribute specifies th namespace for a document.
<html xmlns:fb = "http://www.facebook.com/2008/fbml">  

<head>

<title>Login with Facebook</title>


<link 
         href = "http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" 
         rel = "stylesheet">

</head>
<body>

<?php if($_SESSION['FBID'])                         <!--  After user login  -->
:?>                                     
        
<div class = "container">             //class adds a 16px left and right padding to any HTML element.
           
<div class = "hero-unit">           //full width
              
<h1>Hello <?php echo $_SESSION['USERNAME']; ?></h1> // Displaying username
       
<p>Welcome to "facebook login" </p>
  
</div>
           
<div class = "span4">                                         //extends the blocks//    
                                                               
<ul class = "nav nav-list">                              // navigation group list//ul unordered list//
<li class = "nav-header">Image</li>           // li list iteams//


  // Specifies the URL of an image to be displayed.                                                                                           
<li><img src = "https://graph.facebook.com/<?php  echo $_SESSION['FBID']; ?>/picture"></li>  
                 
<li class = "nav-header">Facebook ID</li>

<li><?php echo  $_SESSION['FBID']; ?></li>
              
<li class = "nav-header">Facebook fullname</li>
                                                               
<li><?php echo $_SESSION['FULLNAME']; ?></li>
              
<li class = "nav-header">Facebook Email</li>
                                                                                               
<li><?php echo $_SESSION['EMAIL']; ?></li>
              
<div><a href="logout.php">Logout</a></div>  // links to the logout.php file//
                                                                                               
</ul>
                                                                               
</div>

</div>
        
<?php else: ?>     <!-- Before login -->
  
<center>
<br>
<br>
<br>
<br>     
<br>
<br>
<div class = "container">           //class adds a 16px left and right padding to any HTML element.
<h1>Login with Facebook</h1>
      Not Connected
           
<div>

<a href = "fbconfig.php">Login with Facebook</a>   // links to Fbconfig.php file
           
</div>
           
<div>
  
<a href = "http://www.publiktalk.com"  // here its links to publiktalk website//
               
title = "Login with facebook">More information about  publiktalk </a>
           
</div>
        
</div>
       
</center>
     
<?php
 endif ?>
     
</body>
</html>
