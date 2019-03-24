

<!DOCTYPE html>
<html>
<head>
	<title>PYTHON PROGRAMMING LAB</title>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/indee.css">

</head>


<script type="text/javascript">
	$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
});
</script>
<body data-spy="scroll" data-target=".navbar" data-offset="60" style="font-family: Ubuntu;">
   <!--header-->
 <?php include 'headerindee.php'?>
 <!--header end-->

<!--Homepage Starts-->
	<img src="img/Python02.jpg" width="100%" height="640">
	<section class="company-heading intro-type" id="parallax-one">
  <div class="container">   
        <a class="ct-btn-scroll ct-js-btn-scroll" class="parallax" id="parallax-cta" href="#section2"><img alt="Arrow Down Icon" src="img/arrow-down.png"></a>
      </div>
  
</section>
<div class="main">
  <section id="section2">
  	<div class="container-fluid" id="explore">
  	 <div class="col-md-12">
  	 	<div class="text" > 
  	 		<div style="background-image:url('img/Python vlab_pic (1).jpg'); background-repeat:no-repeat;background-attachment: fixed; background-size: cover;width:100%;line-height: 4em; margin-left:0em; color: #fff;">WHO WE ARE ?</div>
            </div>
        <br><br>
<h4 style="color: grey;font-family: Ubuntu; text-align: center;font-size: 20px;">Python is considered as one of the simplest language in the programming world. It provides an interface with <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the help of which python can be used for Software Development, GUI Development, Web<br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Development etc. Thus, making things easier for the programmer.Here, we have tried <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to make the experience memorable for the user.
The simulation helps a student in<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; developing his programming skills effectively and efficiently. The basics will be cleared<br> and any sort of confusion will be eradicated with the help of line by line execution display of the code.<br><br></h4>

</div>
  	</div>

  </section>
  <section>
  	<div class="container-fluid">
  		<div class="col-md-12">
  			<div class="text">
  				<div style="background-image: url('img/Python vlab_pic (4).jpg'); background-repeat:no-repeat;background-attachment: fixed; background-size: cover;line-height: 4em; margin-left:0em;width: 100%; color: #fff;"> WHAT WE DO ?</div>
  			</div><br><br>
  			<h4 style="color: grey;font-family: Ubuntu; text-align: center;font-size: 20px;">Python is considered as one of the simplest language in the programming world. It provides an interface with <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the help of which python can be used for Software Development, GUI Development, Web<br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Development etc. Thus, making things easier for the programmer.Here, we have tried <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to make the experience memorable for the user.
The simulation helps a student in<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; developing his programming skills effectively and efficiently. The basics will be cleared<br> and any sort of confusion will be eradicated with the help of line by line execution display of the code.<br><br>
</h4>
  		</div>
  	</div><br><br>
  	<h1  style="color: #AF1216; text-align: center;  font-weight: bold; font-size: 34px; font-family: Cabin Sketch;">LET'S GET STARTED<br><br>
  		<a href="lab/vlab.php"><img src="img/right1.png" width="6%"></a></h1><br>
  
 </section>
</div>
<!---End of Homepage Content-->

<!---Footer--->

<?php include 'footer.php'?>
<!--End of Footer-->

</body>
</html>