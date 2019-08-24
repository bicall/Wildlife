<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery.js"></script>
	<script src="bootstraps/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstraps/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">
	
</head>
<body>
  <section>
<nav >
  <div id="main" class="container-fluid">
  <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
    </div>
  <img src="img/logo.jpg" width="152" height="65" >
    <ul >
      <li><a href="index.php">Home</a></li>
      <li class="dropdown">
          <a href="#" data-toggle="dropdown">Article <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="national.php">National Park</a></li>
            <li><a href="conservation.php">Conservation Areas</a></li>
          </ul>
        </li> 
        <li class="dropdown">
          <a href="#"  data-toggle="dropdown">Programs<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="pages/protection.php">Protection acts of government</a></li>
            <li><a href="pages/seminar.php">Conservation Program</a></li>
          </ul>
        </li>
      <li><a href="#">Contact</a></li>
      <li><a href="#About">About</a></li> 
    </ul>
    </div>
</nav>
</section>
   
   <!-- contact form -->

  <form action="cont.php" method="POST">
<div class="container contact-form">

  <hr>

  <div class="col-md-5">
      <div class="form-group">
        <h1>Contact Us</h1>
        <label>Name</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <label>E-mail</label>
        <input type="text" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Address</label>
        <input  name="" type="text" name="email" class="form-control" required>
      </div>

      <div class="form-group">
        <label>Message</label>
        <textarea type="textarea" name="email" class="form-control" required> </textarea>
      </div>


      <div class="form-group">
        
      </div>
      <div class="form-group">
      <button class="btn btn-primary btn-block">Send</button>
      </div>
    </div>
    
  <div class="row">  
    <div class="col-md-6">
      <h1>Contact Info</h1>
      <address>Newroad, Pokhara Nepal</address>
      <p>Email:- wildlife@gmail.com</p>
      <p>Phone:-9805245666</p>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224976.9268857088!2d83.81653012584624!3d28.229651028739358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1566649551480!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

    </div>

    
  </div>
  
</div>
<br>
<br>
<br>
<br>

<footer class="site-footer section-spacing text-center " id="#">                
 <section>  
<div class="container">   
<div class="row">       
     
<div class="col-md-6 center-block col-sm-6 ">
<br>       
<form id="mc-form" style="float: right;">         
<div class="input-group">           
<input type="email" name="email" class="form-control" style="float: right;" placeholder="Email Address" required id="mc-email">          
<span class="input-group-btn" >           
<button type="submit" class="btn btn-default" style="background: #26EF17; color: black">SUBSCRIBE <i class="fa fa-envelope"></i> </button>           
</span> </div>

 </form>
</div>
 </div>
</div>
</section>
  
<div class="container">
    
<div class="row">
      
<div class="col-md-4">
        
<p class="footer-links" style="float: left;"><a href="#">Terms of Use</a></p>
<p class="footer-links" style="float: left;"> <a href="#">Privacy Policy</a></p>
      
</div>
      
<div class="col-md-4"> <small>&copy; Wildlife preservation<a href="#home">ISMT rampage</a> </small></div>
      
<div class="col-md-4"> 
        
<!--social-->
        
        
<ul class="social">
          
<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter "></i></a></li>
          
<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          
<li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
        
</ul>
        
        
<!--social end--> 
        
      
</div>
    
</div>
  
</div>

</footer>
</body>
</html>