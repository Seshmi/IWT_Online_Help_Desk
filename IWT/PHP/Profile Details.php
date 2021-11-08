<?php
  require_once 'Profile Config.php';

  if (isset($_POST['submit'])) {
    $email = $_POST['search'];

    $sql = 'SELECT * FROM registration WHERE email = :email';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email]);
    $row = $stmt->fetch();
  } 
  else {
	header('location: .');
    exit();
  }
?>

<html>

<head>

<link rel="stylesheet" href="../CSS/Profile Details.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
 
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
			<li class="lii" class="lii a"><a href="../HTML/Logout.html">Home</a></li>
			<li class="lii dropdown" class="lii a"></li>
			<li class="lii dropdown" class="lii a">
		<li class="lii" class="lii a"><a href="../HTML/Advertiser Profile.html">My Account</a></li>
		<li class="lii" class="lii a"><a href="#">My Advertisements</a></li>
		<li class="lii" class="lii a"><a href="#">Add Advertisements</a></li>
		<li class="lii" class="lii a"><a href="../HTML/Adver_contact.html">Contact</a></li>
		
		<li class="lii" class="lii a"><a href="../HTML/About.html">About</a></li>
		</h2></ul></hr>

		<div class="regform"><h1><center>Advertiser Account</center></h1></div>

		<div class="main">

    <center><h2><?= $row['email'] ?></h2></center>
    <center><table>
    <tr><label for="uname"><td><b>User Name</b></td><td><?= $row['username'] ?></td></label></tr>
    <tr><label for="fname"><td><b>First Name</b></td><td><?= $row['first_name'] ?></td></label></tr>
    <tr><label for="lname"><td><b>Last Name</b></td><td><?= $row['last_name'] ?></td></label></tr>
    <tr><label for="cno"><td><b>Contact Number</b></td><td><?= $row['contact_no'] ?></td></label></tr>
</table></center>

<center><a href="../HTML/Advertiser Profile.html"><button type="submit" class="registerbtn">Back</a></button></center>
</div>

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
		&copy; UniSup.com | Designed By IT Group
	</div> 
</div>
        
        
</body>

</html>