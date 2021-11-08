<?php
  require_once 'Config.php';
  session_start();
  $email=$_SESSION['email'];

  if (isset($_SESSION['email'])) {

    $sql = 'SELECT * FROM user_details WHERE email = :email';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email]);
	$row = $stmt->fetch();
	if(isset($_POST['submit']))
	{
		header('location:../HTML/Edit page.html');
	}
  } else {
	header('location: .');
  }
?>

<html>
<head>
<link rel="stylesheet" href="../CSS/User PorfileP style.css"> 
<script src="../JAVA/UserPP.js"></script>
</head>
<body id="bo">
<img src="../IMAGES/logo.jpg" width="110px" height="110px">
<img src="../IMAGES/accpic.png" width="100" height="100" class="accpic">
	<div class="dropdown" style="float:right;" id="accbtn">
	  <button class="btn btn1" class="dropbtn1" >Account</button>
		<div class="dropdown-content">
		  <a href="../HTML/Non_Reg_home.php">Logout</a>
		</div>
	</div>
<h2><ul class="nav">
		<li class="lii" class="lii a"><a href="../HTML/Reg_home.php">Home</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn"  href="../HTML/Coures  page - logout.html">Courses</a>
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
		<li class="lii" class="lii a"><a href="../HTML/Elibrary.html">E-Library</a></li>
		<li class="lii" class="lii a"><a href="../HTML/feedback.html">Feedback</a></li>
		<li class="lii" class="lii a"><a href="../HTML/About.html">About</a></li>
		<li class="lii" class="lii a"><a href="../PHP/User PorfileP.php">My Account</a>
		</h2></ul></hr>

		<form method="POST" action="../PHP/User Login.php" class="login-form">
			<h1 style="color: black;" class="ha1">User Account</h1>
			<center><h2><label style="color: black; margin-top: 50px;">Wellcome <?= $row['name'] ?></label></h2></center>
			
			<center>
			<div class="txtb">
				<label class="txtb" for="uname"><b>User Name: </b><br><?= $row['name'] ?></label>
			</div>
	
			<div class="txtb">
				<label class="txtb" for="fname"><b>Email: </b><br><?= $row['email'] ?></label>
			</div>
			
			<div class="txtb">
				<label class="txtb" for="lname"><b>University Type: </b><br><?= $row['university_type'] ?></label>
			</div>

			<div class="txtb">
				<label class="txtb" for="cno"><b>University: </b><br><?= $row['university'] ?></label>
			</div>

			<div class="txtb">
				<label class="txtb" class="txtb" for="cno"><b>University Course: </b><br><?= $row['university_course'] ?></label>
			</div>
			</center>
			<input type="button" class="logbtn" value="Edit" name="submit" onclick="page1()"><br>
			<input type="button" class="logbtn" value="Back" name="back" onclick="page2()">
		  </form>

<div class="footer">
	<div class="footer-content">
		
		<div class="footer-section about">
			<h1 id="text">UniSup.lk</h1>
			<p id="text">This site represents an online helpdesk for university students.This site allows
			students to choose the coures that best suits has their profrssional qualifications.Therefore this site is helpful for students to choose 
			the university for their choice and the coures.</p>
				<p id="text">Tel: +94 987-654-321 | E-mail: info@uniSup.com</p>
		</div>
		<div class="footer-section links"></div>
			<div id="footerimgW">
				<a href="https://web.whatsapp.com/"><img src="../IMAGES/whatapp.jpg" width="30px" height="30px"></a>
				<a href="https://www.youtube.com/"><img src="../IMAGES/youtube.png" width="30px" height="30px"></a>
				<a href="https://www.facebook.com/"><img src="../IMAGES/facebook.png" width="30px" height="30px"></a>
			</div>
	</div>
	<div class="footer-bottom" id="text">
		&copy; UniSup.com | Designed By MLB_PG.02.01_04
	</div> 
</div>        
</body>
</html>