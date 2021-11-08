<html>
<head>
<title>Library</title>
<link rel="stylesheet" href="../CSS/Library_Page.css">
</head>
<body>

<img src="../IMAGES/logo.jpg" width="110px" height="110px">
<img src="../IMAGES/accpic.png" width="100" height="100" class="accpic">
	<div class="dropdown" style="float:right;" id="accbtn">
	  <button class="dropbtn1" >Account</button>
		<div class="dropdown-content">
		  <a href="User Login page.html">User Login</a>
		  <a href="#O">Lecturer Login</a>
		  <a href="#">University Login</a> 
		  <a href="#">Advertiser login</a>
		</div>
	</div>
<h2><ul class="nav">
		<li class="lii" class="lii a"><a href="../HTML/Home.html">Home</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn"  href="..">Coures</a>
				<div class="dropdown-content">
					<a href="#">Faculty of Computing</a>
					<a href="#">Faculty of Engineering</a>
					<a href="#">Faculty of Business Management</a>
					<a href="#">Faculty of Information Technology</a>
					<a href="#">Faculty of Architecture</a>
					<a href="#">Faculty of Law</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn" href="#">University</a>
				<div class="dropdown-content">
					<a href="#">Government University</a>
					<a href="#">Private University</a></li></div>
		<li class="lii" class="lii a"><a href="../HTML/contact.html">Contact</a></li>
		<li class="lii" class="lii a"><a href="#About">FAQ</a></li>
		<li class="lii" class="lii a"><a href="../HTML/Elibrary.html">E-library</a></li>
		<li class="lii" class="lii a"><a href="../HTML/feedback.html">Feedback</a></li>
		<li class="lii" class="lii a"><a href="#About">About</a></li>
		</h2></ul></hr>
		


<!------------------ content ------------------>
<?php
$connection = mysqli_connect('localhost','root','','helpdesk');
$search=$_POST{'text'};
$query = "SELECT *
          FROM library
          where Name='$search'";
$results = mysqli_query($connection,$query);

$row=mysqli_num_rows($results);
if($row>=1)
{
    if($results)
    {
        while($record = mysqli_fetch_array($results))
        {
        
        ?><center><?php
        
        ?>   <div class="dis1"> <?php echo $record['Name'] ?> </div> <br>  <?php

        ?>   <div class="dis2">   <?php echo $record['ID'] ?> </div> <br>  <?php
    
        ?> <div ><?php  echo '<img src="data:image;base64,'.base64_encode($record['image']).' " alt="Image" style="wisth:100px; height:100px ">'; ?> <?php
            
        ?>  <br>  <div class="dis3">  <?php echo $record['details'] ?> </div> <br>  <?php

        ?>  <div class="dis4"><b>Rs:</b>  <?php echo $record['Price'] ?> </div>    <?php
	   
		?> <a href="../HTML/payment.html"> <input type="button" class="but" value="Buy"><hr></a>  <?php
		
        ?></center><?php
        }
    }
}
else
{
    
   ?> <center> <div class="dis5" > <b> <?php echo "Sorry!! This book is not available in our store..."; ?> </b> </div> </center> <?php
	
}
?>
<center><a href="../HTML/Elibrary.html"><input type="button" class="buton" value="Back"></a></center>

<!------------------ content End------------------>

<div class="footer">
	<div class="footer-content">
		
		<div class="footer-section about">
			<h1 id="text">UniSup.lk</h1>
			<p id="text">This site represents an online helpdesk for university students.This site allows
			students to choose the coures that best suits has their profrssional qualifications.Therefore this site is helpful for students to choose 
			the university for their choice and the coures.</p>
				<p id="text">Tel: +94 987-654-321<br>
				E-mail: info@uniSup.com</p>
		</div>
		<div class="footer-section links"></div>
			<div id="footerimgW">
				<a href="https://web.whatsapp.com/"><img src="../IMAGES/whats.jpeg" width="30px" height="30px"></a>
				<a href="https://www.youtube.com/"><img src="../IMAGES/you.jpeg" width="30px" height="30px"></a>
				<a href="https://www.facebook.com/"><img src="../IMAGES/fb.jpeg" width="30px" height="30px"></a>
			</div>
	</div>
	<div class="footer-bottom" id="text">
		&copy; UniSup.com | Designed By IT Group
	</div> 
</div>

</body>
<html>