<!DOCTYPE
 html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="../js/jquery.js"></script>
	<script src="../bootstraps/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../bootstraps/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../library/font-awesome-4.3.0/css/font-awesome.min.css">
	

</head>
<body>
	<div class="wrapper"> 
	<!-- navbar -->
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
	<img src="../img/logo.jpg" width="152" height="65" >
    <ul >
      <li><a href="../index.php">Home</a></li>
      <li class="dropdown">
					<a href="#" data-toggle="dropdown">Article <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="../national.php">National Park</a></li>
						<li><a href="../conservation.php">Conservation Areas</a></li>
					</ul>
				</li> 
        <li class="dropdown">
					<a href="#"  data-toggle="dropdown">Programs<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="protection.php">Protection acts of government</a></li>
						<li><a href="seminar.php">Conservation Program</a></li>
					</ul>
				</li>
      <li><a href="#">Contact</a></li>
      <li><a href="#About">About</a></li> 
    </ul>
    </div>
</nav>
</section>
<!-- navbar close -->

<!-- home -->
<section>
  <h2 style="font-family: arial; font-weight: bold;">Seminar program</h2><br>
  <p style="font-family: arial; font-size: 20px;">
 
People from the nearest area of the national park or conservation area are invited and suggested to attend the seminar program. <br><br>
The seminar program should hold once in 3 months. <br><br>
The seminar program will discuss on the topic like ways of protecting animals/resources, numbers of species (listing out the decreasing number and discussion is done to conserve them), environmental issues and its solving methods. 
<br><br> Discussion of:
- Use of AI Technology for providing better security to the animals. <br><br>
- Use of AI Technology to detect the illegal activities inside the area. <br><br>
<img src="../img/noHunting.jpg" style="height: 150px; width: 150px; margin: 40px; float: center;">  
<img src="../img/Pvtprt.png" style="height: 150px; width: 150px; margin: 40px; float: center;">
<img src="../img/noFish.png" style="height: 150px; width: 150px; margin: 40px; float: center;">

<h2 style="font-family: arial;">Awareness Program</h2> <br>
<p style="font-family: arial; font-size: 20px;">- Using banners and poster includes the no hunting on the area and save wildlife.</p>  <br>
<img src="../img/save1.jpg" style="height: 150px; width: 150px; margin: 40px;">
<img src="../img/save2.jpg" style="height: 150px; width: 150px; margin: 40px;">
<img src="../img/save3.jpg" style="height: 150px; width: 150px; margin: 40px;">
  </p>
</section>

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
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>
</div>
</html>