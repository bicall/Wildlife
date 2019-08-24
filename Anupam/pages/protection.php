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
  <h2 style="font-family: arial; font-weight: bold;">The government has implemented acts for the protection of wildlife.</h2><br><br>
  <p style="font-family: arial; font-size: 20px;">
   
1) Except than the Government Employees deputed for
the duty, the other person shall not be allowed to
enter into the preserved National Reserve without 
receiving the written permission from the chief.
<br><br>
2) Generally, the permission is provided only for a 
scientific research.
<br><br>
3) If the female wildlife or bird is pregnant or with newly 
born(young) offsprings, then the haunting is prohibited 
for all even for the person receiving a license. <br>
<img src="../img/hunting.jpg" style="height: 100px; width: 100px; "><br><br>
4) Without the written order of the Chief any person shall 
not hunt a wildlife or birds by using any trap like 
darjan, damal(tying rope), jaal, dharap(obstacles),
khor(cage) or paso(hanging rope).
<br><br>
5) Automatic Rifle or any type of weapon which fires 
multiple bullets in the single click of a trigger are prohibited 
for hunting. <br>
<img src="../img/gun.png" style="height: 100px; width: 100px; "><br><br>
6) Certain amount of fee is required to catch the wildlife
and birds.  <br><br>

7) If the licensee injured to the wildlife during the
hunting, it shall be killed by finding out as early as possible and 
the detail of such injured wildlife shall be mentioned in
his/her register. <br>
<img src="../img/oneHorned.jpg" style="height: 100px; width: 100px;"><br><br>
8) The person promising to operate any services or facilities 
within the National Park or Reserve shall take the approval of the 
Government of Nepal. 
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