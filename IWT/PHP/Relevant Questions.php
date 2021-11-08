<?php
   $conn = mysqli_connect("localhost", "root", "");

   $db = mysqli_select_db($conn, "uni");

  if (isset($_POST['submit'])) {
	//$email = $_POST['search'];
	$university=$_POST['uni'];
	$coures=$_POST['cou'];

    $sql = 'SELECT * FROM reg WHERE faculty_name = :faculty_name AND course_name';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['faculty_name' => $university] || ['course_name' => $coures]);
    $row = $stmt->fetch();
  } else {
	header('location: .');
    exit();
  }
?>

<html>
<head>
	
	<link rel="stylesheet" href="../CSS/Relevant Questions.css">
</head>
<body id="bo">
	<img src="../images/logo.jpg" width="110px" height="110px">
<img src="../images/accpic.png" height="100" class="accpic">
<div class="dropdown" style="float:right;" id="accbtn">
	<button class="btn btn1" class="dropbtn1">Account</button>
	  <div class="dropdown-content">
		<a href="User Login page.html">User Login</a>
		<a href="#">Lecturer Login</a>
		<a href="University login.html">University Login</a> 
		<a href="#">Advertiser login</a>
	  </div>
  </div>
<h2><ul class="nav">
		<li class="lii" class="lii a"><a href="#Home">Home</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn"  href="Coures.html">Courses</a>
				<div class="dropdown-content">
					<a href="#">Faculty of Computing</a>
					<a href="#">Faculty of Engineering</a>
					<a href="#">Faculty of Business Management</a>
					<a href="#">Faculty of Law</a>
					<a href="#">Faculty of Medicine</a>
					<a href="#">Faculty of Humanaties and Science</a>
					<a href="#">Faculty of Architecture</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn" href="#">University</a>
				<div class="dropdown-content">
					<a href="#">Government University</a>
					<a href="#">Private University</a></li></div>
		<li class="lii" class="lii a"><a href="#Contact">Contact</a></li>
		<li class="lii" class="lii a"><a href="#About">About</a></li>
		<li class="lii" class="lii a"><a href="#E-library">E-library</a></li>
		<li class="lii" class="lii a"><a href="#FAQ">FAQ</a></li>
		<li class="lii" class="lii a"><a href="Feedback">Feedback</a></li>
		<li class="lii" class="lii a"><a href="#My Acc">My account</a></li>
	
		</h2></ul></hr>
<div class="space">
<p><b>Universities:</b></p>
<select id="course" class="sel" name="uni">
	<option value="sliit">Sri Lanka Institute of Information Technology(SLIIT)</option>
	<option value="sjp">University of Sri Jayewardenepura </option>
	<option value="colombo">University of Colombo </option>
	<option value="NSBM">NSBM Green University</option>
</select>
<p><b>Couress:</b></p>
<select id="course" class="sel" name="cou">
	<option value="sliit">Sri Lanka Institute of Information Technology(SLIIT)</option>
	<option value="sjp">University of Sri Jayewardenepura </option>
	<option value="colombo">University of Colombo </option>
	<option value="NSBM">NSBM Green University</option>
</select>
<input type="button" value="Search" class="space" name="submit">
<p><b>Courses:</b></p>
<select id="comodel" class="sel"></select> 
<hr></hr>

<h1><font color="darkblue">University:</font><font color="light blue"><?= $row['dfasd']?></font></h1>
<h2><font color="darkblue">Course: <?= $row['course_name']?></font></h2>

<h3><font color="light blue">BSc (Hons) In Information Technology - Software Engineering</font></h3>

	<li>Question: Who is software project manager? What is his role?</li>
	<ul><li>Answer:


<div class="footer">
	<div class="footer-content">
		
		<div class="footer-section about">
			<h1 id="text">UniSup.lk</h1>
			<p id="text">This site represents an online helpdesk for university students.This site allows
			students to choose the coures that best suits has their profrssional qualifications.Therefore this site is helpful for students to choose 
			the university for their choice and the coures.</p><br>
				<p id="text">Tel: +94 987-654-321<br>
				E-mail: info@uniSup.com</p>
		</div>
		<div class="footer-section links"></div>
			<div id="footerimgW">
				<a href="https://web.whatsapp.com/"><img src="../images/whatapp.jpg" width="30px" height="30px"></a>
				<a href="https://www.youtube.com/"><img src="../images/youtube.png" width="30px" height="30px"></a>
				<a href="https://www.facebook.com/"><img src="../images/facebook.png" width="30px" height="30px"></a>
			</div>
	</div>
	<div class="footer-bottom" id="text">
		&copy; UniSup.com | Designed By IT Group
	</div> 
</div>


</body>
</html>
