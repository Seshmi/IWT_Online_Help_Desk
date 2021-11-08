<?php
  require_once 'Config.php';

  if (isset($_POST['submit'])) {
    $email = $_POST['search'];

    $sql = 'SELECT * FROM reg WHERE email = :email';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email]);
    $row = $stmt->fetch();
  } else {
	header('location: .');
    exit();
  }
?>

<html>

<head>

<link rel="stylesheet" href="../CSS/Details.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
 
</head>

<body id="bo">
<img src="../IMAGES/logo.jpg" width="110px" height="110px">
<img src="../IMAGES/accpic.png" width="100" height="100" class="accpic">
	<div class="dropdown" style="float:right;" id="accbtn">
	  <button class="btn btn1" class="dropbtn1" >Account</button>
		<div class="dropdown-content">
		  <a href="../HTML/University login.html">Logout</a>
		</div>
	</div>
<h2><ul class="nav">
		<li class="lii" class="lii a"><a href="#Home">Home</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn"  href="Coures.html">Courses</a>
				<div class="dropdown-content">
					<a href="../HTML/Faculty Computing.html">Faculty of Computing</a>
					<a href="../HTML/Faculty of Engineering.html">Faculty of Engineering</a>
					<a href="#">Faculty of Business Management</a>
					<a href="#">Faculty of Information Technology</a>
					<a href="#">Faculty of Architecture</a>
					<a href="#">Faculty of Law</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn">University</a>
				<div class="dropdown-content">
					<a href="../HTML/government university page.html">Government University</a>
					<a href="../HTML/private university page.html">Private University</a></li></div>
		<li class="lii" class="lii a"><a href="#Contact">Contact</a></li>
		<li class="lii" class="lii a"><a href="#Feedback">Feedback</a></li>
		<li class="lii" class="lii a"><a href="#About">About</a></li>
		<li class="lii" class="lii a"><a href="../HTML/university profile.html">My Account</a></li>
		</h2></ul></hr>

		<div class="regform"><h1><center>Advertiser Profile</center></h1></div>

		<div class="main">

    <center><h2><?= $row['email'] ?></h2></center>
    <center><table>
    <tr><label for="uname"><td><b>University Name</b></td><td><?= $row['names'] ?></td></label></tr>
    <tr><label for="fname"><td><b>University E-mail</b></td><td><?= $row['email'] ?></td></label></tr>
    <tr><label for="lname"><td><b>University Telephone Number</b></td><td><?= $row['t_number'] ?></td></label></tr>
</table></center>

<center><a href="../HTML/university profile.html"><button type="submit" class="registerbtn">Back</a></button></center>
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